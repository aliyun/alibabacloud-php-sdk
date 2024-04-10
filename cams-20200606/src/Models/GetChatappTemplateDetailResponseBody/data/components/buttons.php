<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons\extendAttrs;
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
     * @description The coupon code.
     *
     * @example 202039ksjs
     *
     * @var string
     */
    public $couponCode;

    /**
     * @description The extended fields.
     *
     * @var extendAttrs
     */
    public $extendAttrs;

    /**
     * @description flow 数据事件类型
     * 取值范围：NAVIGATE/DATA_EXCHANGE
     * @example NAVIGATE
     *
     * @var string
     */
    public $flowAction;

    /**
     * @description Flow ID
     *
     * @example 3838292983
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
     * @description 跳转屏
     * 在FlowAction=NAVIGATE时必填
     * @example DETAILS
     *
     * @var string
     */
    public $navigateScreen;

    /**
     * @description The app package name that WhatsApp uses to load your app. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP in a WhatsApp message template.
     *
     * @example com.aliyun
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The phone number. This parameter is valid only if the Type sub-parameter of the Buttons parameter is set to **PHONE_NUMBER**.
     *
     * @example 861398745****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The app signing key hash that WhatsApp uses to load your app. This parameter is required if Category is set to AUTHENTICATION and the Type sub-parameter of the Buttons parameter is set to ONE_TAP in a WhatsApp message template.
     *
     * @example 2993839
     *
     * @var string
     */
    public $signatureHash;

    /**
     * @description The display name of the button.
     *
     * @example Call
     *
     * @var string
     */
    public $text;

    /**
     * @description The type of the button. Valid values:
     *
     *   **PHONE_NUMBER**: phone call button
     *   **URL**: URL button
     *   **QUICK_REPLY**: quick reply button
     *
     * >
     *
     *   In a message template, a quick reply button cannot be used together with a phone call button or a URL button.
     *
     *   You can add a combination of two URL buttons or a combination of a URL button and a phone call button to a message template.
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
        'extendAttrs'    => 'ExtendAttrs',
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
        if (null !== $this->extendAttrs) {
            $res['ExtendAttrs'] = null !== $this->extendAttrs ? $this->extendAttrs->toMap() : null;
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
        if (isset($map['ExtendAttrs'])) {
            $model->extendAttrs = extendAttrs::fromMap($map['ExtendAttrs']);
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
