<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons\extendAttrs;
use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，Whatsap Autofill操作的按钮文本
     *
     * @example Autofill
     *
     * @var string
     */
    public $autofillText;

    /**
     * @description 扩展字段
     *
     * @var extendAttrs
     */
    public $extendAttrs;

    /**
     * @description Whatsapp模板，在Category为Marketing,并且Button type为QUICK_REPLY时有效，表示按钮为营销退订按钮，客户如果点击了此按钮，并且在chatapp平台上配置了发送控制操作，则后续Marketing消息则不会发送到客户
     *
     * @example false
     *
     * @var bool
     */
    public $isOptOut;

    /**
     * @description Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的包名
     *
     * @example com.aliyun
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The phone number. This parameter is valid only if the returned value of the Type parameter is **PHONE_NUMBER**.
     *
     * @example 861398745****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的签名Hash值
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
     *   **PHONE_NUMBER**: a phone call button
     *   **URL**: a URL button
     *   **QUICK_REPLY**: a quick reply button
     *
     * >
     *
     *   A quick reply button cannot coexist with a phone call button or a URL button in a message template.
     *
     *   You can add a combination of two URL buttons or a combination of a URL button and a phone call button to a message template.
     *
     *   You can add only one button to a Viber message template, and the button must be a URL button.
     *
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL to be accessed when you click the URL button.
     *
     * @example https://example.com
     *
     * @var string
     */
    public $url;

    /**
     * @description The type of the URL. Valid values:
     *
     *   **static**: a static URL
     *   **dynamic**: a dynamic URL
     *
     * @example static
     *
     * @var string
     */
    public $urlType;
    protected $_name = [
        'autofillText'  => 'AutofillText',
        'extendAttrs'   => 'ExtendAttrs',
        'isOptOut'      => 'IsOptOut',
        'packageName'   => 'PackageName',
        'phoneNumber'   => 'PhoneNumber',
        'signatureHash' => 'SignatureHash',
        'text'          => 'Text',
        'type'          => 'Type',
        'url'           => 'Url',
        'urlType'       => 'UrlType',
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
        if (null !== $this->extendAttrs) {
            $res['ExtendAttrs'] = null !== $this->extendAttrs ? $this->extendAttrs->toMap() : null;
        }
        if (null !== $this->isOptOut) {
            $res['IsOptOut'] = $this->isOptOut;
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
        if (isset($map['ExtendAttrs'])) {
            $model->extendAttrs = extendAttrs::fromMap($map['ExtendAttrs']);
        }
        if (isset($map['IsOptOut'])) {
            $model->isOptOut = $map['IsOptOut'];
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
