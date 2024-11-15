<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components;

use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\buttons\supportedApps;
use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description The text of the one-tap autofill button. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP for a WhatsApp message template.
     *
     * @example Autofill
     *
     * @var string
     */
    public $autofillText;

    /**
     * @description The coupon code. It can contain only letters and digits. You can set this parameter to a variable such as $(couponCode). Specify the value of couponCode when you send a message.
     *
     * @example 120293
     *
     * @var string
     */
    public $couponCode;

    /**
     * @description The Flow action.
     *
     * Valid values:
     *
     *   DATA_EXCHANGE
     *   NAVIGATE
     *
     * @example NAVIGATE
     *
     * @var string
     */
    public $flowAction;

    /**
     * @description The Flow ID.
     *
     * @example 664597077870605
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The unsubscribe button. This parameter is valid if Category is set to MARKETING and the Type sub-parameter of the Buttons parameter is set to QUICK_REPLY for a WhatsApp message template. Marketing messages will not be sent to customers if you configure message sending in the Chat App Message Service console and the customers click this button.
     *
     * @example false
     *
     * @var bool
     */
    public $isOptOut;

    /**
     * @description The first screen in the Flow. This parameter is required if FlowAction is set to NAVIGATE.
     *
     * @example DETAILS
     *
     * @var string
     */
    public $navigateScreen;

    /**
     * @description The app package name that WhatsApp uses to load your app. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP for a WhatsApp message template.
     *
     * @example com.demo
     *
     * @deprecated
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The phone number.
     *
     * @example +8613888887889
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The app signing key hash that WhatsApp uses to load your app. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP for a WhatsApp message template.
     *
     * @example 29dkeke
     *
     * @deprecated
     *
     * @var string
     */
    public $signatureHash;

    /**
     * @description List of supported apps.
     *
     * @var supportedApps[]
     */
    public $supportedApps;

    /**
     * @description The text of the button.
     *
     * @example phone-button-text
     *
     * @var string
     */
    public $text;

    /**
     * @description The button type. Valid values:
     *
     *   **PHONE_NUMBER**: phone call button
     *   **URL**: URL button
     *   **QUICK_REPLY**: quick reply button
     *   **COPY_CODE**: copy code button
     *   **ONE_TAP**: one-tap autofill button if Category is set to AUTHENTICATION
     *
     * >
     *
     *   If Category is set to AUTHENTICATION for a WhatsApp message template, you can add only one button to the WhatsApp message template and you must set the Type sub-parameter of the Buttons parameter to COPY_CODE or ONE_TAP. If Type is set to COPY_CODE, the Text sub-parameter of the Buttons parameter is required. If Type is set to ONE_TAP, the Text, SignatureHash, PackageName, and AutofillText sub-parameters of the Buttons parameter are required. The value of Text is displayed if the desired app is not installed on the device. The value of Text indicates that you must manually copy the verification code.
     *
     *   You can add only one button to a Viber message template, and you must set the Type sub-parameter of the Buttons parameter to URL.
     *
     * This parameter is required.
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL to which you are redirected when you click the URL button.
     *
     * @example https://www.website.com/
     *
     * @var string
     */
    public $url;

    /**
     * @description The URL type. Valid values:
     *
     *   **static**
     *   **dynamic**
     *
     * @example dynamic
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
        'supportedApps'  => 'SupportedApps',
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
        if (null !== $this->supportedApps) {
            $res['SupportedApps'] = [];
            if (null !== $this->supportedApps && \is_array($this->supportedApps)) {
                $n = 0;
                foreach ($this->supportedApps as $item) {
                    $res['SupportedApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['SupportedApps'])) {
            if (!empty($map['SupportedApps'])) {
                $model->supportedApps = [];
                $n                    = 0;
                foreach ($map['SupportedApps'] as $item) {
                    $model->supportedApps[$n++] = null !== $item ? supportedApps::fromMap($item) : $item;
                }
            }
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
