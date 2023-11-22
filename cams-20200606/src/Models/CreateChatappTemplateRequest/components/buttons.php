<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description The text of the one-tap autofill button. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP in a WhatsApp message template.
     *
     * @example Autofill
     *
     * @var string
     */
    public $autofillText;

    /**
     * @example 29838isue8
     *
     * @var string
     */
    public $couponCode;

    /**
     * @example NAVIGATE
     *
     * @var string
     */
    public $flowAction;

    /**
     * @example 28383872***
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The unsubscribe button. This parameter is valid if Category is set to MARKETING and the Type sub-parameter of the Buttons parameter is set to QUICK_REPLY in a WhatsApp message template. After you configure message sending in the ChatApp Message Service console, marketing messages will not be sent to customers if they click this button.
     *
     * @example false
     *
     * @var bool
     */
    public $isOptOut;

    /**
     * @example SIGN_UP
     *
     * @var string
     */
    public $navigateScreen;

    /**
     * @description The app package name that WhatsApp uses to load your app. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP in a WhatsApp message template.
     *
     * @example com.demo
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The phone number. This parameter is valid only when the Type sub-parameter of the Buttons parameter is set to **PHONE_NUMBER**.
     *
     * @example +861368897****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The app signing key hash that WhatsApp uses to load your app. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP in a WhatsApp message template.
     *
     * @example wi299382
     *
     * @var string
     */
    public $signatureHash;

    /**
     * @description The display name of the button.
     *
     * @example Call Me
     *
     * @var string
     */
    public $text;

    /**
     * @description The type of the button. Valid values:
     *
     *   **PHONE_NUMBER**: the phone call button
     *   **URL**: the URL button
     *   **QUICK_REPLY**: the quick reply button
     *   **COPY_CODE**: the copy code button if Category is set to AUTHENTICATION
     *   **ONE_TAP**: the one-tap autofill button if Category is set to AUTHENTICATION
     *
     * >
     *
     *   In a WhatsApp message template, the quick reply button cannot be used together with the phone call button or the URL button.
     *
     *   You can add a combination of two URL buttons or a combination of a URL button and a phone call button to a WhatsApp message template.
     *
     *   If Category is set to AUTHENTICATION in a WhatsApp message template, you can add only one button to the WhatsApp message template and you must set the Type sub-parameter of the Buttons parameter to COPY_CODE or ONE_TAP. If the Type sub-parameter of the Buttons parameter is set to COPY_CODE, the Text sub-parameter of the Buttons parameter is required. If the Type sub-parameter of the Buttons parameter is set to ONE_TAP, the Text, SignatureHash, PackageName, and AutofillText sub-parameters of the Buttons parameter are required. The value of Text is displayed if the desired app is not installed on the device. The value indicates that you must manually copy the verification code.
     *
     *   You can add only one button to a Viber message template, and you must set the Type sub-parameter of the Buttons parameter to URL.
     *
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL to which you are redirected when you click the URL button.
     *
     * @example https://example.com
     *
     * @var string
     */
    public $url;

    /**
     * @description The type of the URL. Valid values:
     *
     *   **static**
     *   **dynamic**
     *
     * @example static
     *
     * @var string
     */
    public $urlType;
    protected $_name = [
        'autofillText'   => 'AutofillText',
        'couponCode'     => 'CouponCode',
        'flowAction'     => 'FlowAction',
        'flowId'         => 'FlowId',
        'isOptOut'       => 'IsOptOut',
        'navigateScreen' => 'NavigateScreen',
        'packageName'    => 'PackageName',
        'phoneNumber'    => 'PhoneNumber',
        'signatureHash'  => 'SignatureHash',
        'text'           => 'Text',
        'type'           => 'Type',
        'url'            => 'Url',
        'urlType'        => 'UrlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autofillText) {
            $res['AutofillText'] = $this->autofillText;
        }
        if (null !== $this->couponCode) {
            $res['CouponCode'] = $this->couponCode;
        }
        if (null !== $this->flowAction) {
            $res['FlowAction'] = $this->flowAction;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->isOptOut) {
            $res['IsOptOut'] = $this->isOptOut;
        }
        if (null !== $this->navigateScreen) {
            $res['NavigateScreen'] = $this->navigateScreen;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->signatureHash) {
            $res['SignatureHash'] = $this->signatureHash;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->urlType) {
            $res['UrlType'] = $this->urlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buttons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutofillText'])) {
            $model->autofillText = $map['AutofillText'];
        }
        if (isset($map['CouponCode'])) {
            $model->couponCode = $map['CouponCode'];
        }
        if (isset($map['FlowAction'])) {
            $model->flowAction = $map['FlowAction'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['IsOptOut'])) {
            $model->isOptOut = $map['IsOptOut'];
        }
        if (isset($map['NavigateScreen'])) {
            $model->navigateScreen = $map['NavigateScreen'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['SignatureHash'])) {
            $model->signatureHash = $map['SignatureHash'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UrlType'])) {
            $model->urlType = $map['UrlType'];
        }

        return $model;
    }
}
