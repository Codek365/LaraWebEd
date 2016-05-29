<?php namespace App\Http\Controllers\Front;

use Acme;
use App\Models;
use Illuminate\Http\Request;

class GlobalActionsController extends BaseFrontController
{
    public function __construct()
    {
        parent::__construct();
        $this->bodyClass = 'product';
    }

    public function postContactUs(Request $request, Models\Contact $object)
    {
        $googleCaptchaResponse = $request->get('g-recaptcha-response', null);
        if (!$this->_validateGoogleCaptcha($googleCaptchaResponse)) {
            $this->_setFlashMessage(trans('captcha.error'), 'error');
            $this->_showFlashMessages();
            return redirect()->back();
        }

        $data = $request->all();
        if(isset($data['content']))
        {
            $data['content'] = nl2br($data['content']);
        }
        $result = $object->fastEdit($this->_stripTagsData($data), true);
        $errorCode = ($result['error']) ? 500 : 200;
        $messageType = ($result['error']) ? 'error' : 'success';
        return $this->_responseAutoDetect($request, $result['message'], $result['error'], $errorCode, $messageType, true);
    }

    public function postSubscribeEmail(Request $request, Models\SubscribedEmails $object)
    {
        $result = $object->fastEdit($this->_stripTagsData($request->all()), true);
        $errorCode = ($result['error']) ? 500 : 200;
        $messageType = ($result['error']) ? 'error' : 'success';
        return $this->_responseAutoDetect($request, $result['message'], $result['error'], $errorCode, $messageType);
    }
}