<form action="/{{ $currentLanguageCode }}/global-actions/contact-us" method="POST" accept-charset="utf-8" name="sentMessage" id="contactForm" novalidate>
    {!! csrf_field() !!}
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Subject</label>
            <input type="text" value="{{ old('subject') }}" name="subject" class="form-control" placeholder="Subject" id="subject" required data-validation-required-message="Please enter your subject.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Email Address</label>
            <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Phone Number</label>
            <input type="tel" value="{{ old('phone') }}" name="phone" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" name="content" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message.">{!! old('content') !!}</textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-group">
        <div id="contactBoxCaptcha"></div>
    </div>
    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">Send</button>
        </div>
    </div>
</form>