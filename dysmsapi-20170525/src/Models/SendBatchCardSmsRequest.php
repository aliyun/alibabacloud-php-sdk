<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SendBatchCardSmsRequest extends Model
{
    /**
     * @description The code of the message template. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * This parameter is required.
     * @example CARD_SMS_3245
     *
     * @var string
     */
    public $cardTemplateCode;

    /**
     * @description The variables of the card message template.
     *
     * @example [{\\"customurl\\":\\"http://www.alibaba.com\\",\\"dyncParams\\":\\"{\\\\\\"a\\\\\\":\\\\\\"hello\\\\\\",\\\\\\"b\\\\\\":\\\\\\"world\\\\\\"}\\"}]
     *
     * @var string
     */
    public $cardTemplateParamJson;

    /**
     * @description The code of the digital message template that applies when the card message is rolled back. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * > Make sure that the message template has been approved.
     * @example DIGITAL_SMS_234080176
     *
     * @var string
     */
    public $digitalTemplateCode;

    /**
     * @description The variables of the digital message template.
     *
     * @example [{"a":1,"b":2},{"a":9,"b":8}]
     *
     * @var string
     */
    public $digitalTemplateParamJson;

    /**
     * @description The rollback type. Valid values:
     *
     *   **SMS**: text message
     *   **DIGITALSMS**: digital message
     *   **NONE**: none
     *
     * This parameter is required.
     * @example SMS
     *
     * @var string
     */
    public $fallbackType;

    /**
     * @description The ID that is reserved for the caller of the operation.
     *
     * @example 16545681783595370
     *
     * @var string
     */
    public $outId;

    /**
     * @description The mobile numbers of the recipients.
     *
     * This parameter is required.
     * @example [\\"1390000****\\",\\"1370000****\\"]"
     *
     * @var string
     */
    public $phoneNumberJson;

    /**
     * @description The signature. You can view the template code in the **Signature** column on the **Signaturess** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * This parameter is required.
     * @var string
     */
    public $signNameJson;

    /**
     * @description The code of the text message template that applies when the card message is rolled back. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * > Make sure that the message template has been approved.
     * @example SMS_234251075
     *
     * @var string
     */
    public $smsTemplateCode;

    /**
     * @description The variables of the text message template.
     *
     * @example [{"a":1,"b":2},{"a":9,"b":8}]
     *
     * @var string
     */
    public $smsTemplateParamJson;

    /**
     * @description The extension code of the upstream message.
     *
     * @example [\\"6\\",\\"6\\"]
     *
     * @var string
     */
    public $smsUpExtendCodeJson;

    /**
     * @description The code of the message template.
     *
     * You can log on to the [Alibaba Cloud console](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview), click **Go China** or **Go Globe** in the left-side navigation pane, and then view the **template code** on the **Templates** tab.
     *
     * > You must specify a message template that is created in the SMS console and approved by Alibaba Cloud. If you send messages to countries or regions outside the Chinese mainland, use the corresponding message templates.
     * @example SMS_20375****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The value of the variable in the message template.
     *
     * > If you need to add line breaks to the JSON template, make sure that the format is valid. In addition, the sequence of variable values must be the same as that of the mobile numbers and signatures.
     * @example [{"name":"TemplateParamJson"},{"name":"TemplateParamJson"}]
     *
     * @var string
     */
    public $templateParamJson;
    protected $_name = [
        'cardTemplateCode'         => 'CardTemplateCode',
        'cardTemplateParamJson'    => 'CardTemplateParamJson',
        'digitalTemplateCode'      => 'DigitalTemplateCode',
        'digitalTemplateParamJson' => 'DigitalTemplateParamJson',
        'fallbackType'             => 'FallbackType',
        'outId'                    => 'OutId',
        'phoneNumberJson'          => 'PhoneNumberJson',
        'signNameJson'             => 'SignNameJson',
        'smsTemplateCode'          => 'SmsTemplateCode',
        'smsTemplateParamJson'     => 'SmsTemplateParamJson',
        'smsUpExtendCodeJson'      => 'SmsUpExtendCodeJson',
        'templateCode'             => 'TemplateCode',
        'templateParamJson'        => 'TemplateParamJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardTemplateCode) {
            $res['CardTemplateCode'] = $this->cardTemplateCode;
        }
        if (null !== $this->cardTemplateParamJson) {
            $res['CardTemplateParamJson'] = $this->cardTemplateParamJson;
        }
        if (null !== $this->digitalTemplateCode) {
            $res['DigitalTemplateCode'] = $this->digitalTemplateCode;
        }
        if (null !== $this->digitalTemplateParamJson) {
            $res['DigitalTemplateParamJson'] = $this->digitalTemplateParamJson;
        }
        if (null !== $this->fallbackType) {
            $res['FallbackType'] = $this->fallbackType;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phoneNumberJson) {
            $res['PhoneNumberJson'] = $this->phoneNumberJson;
        }
        if (null !== $this->signNameJson) {
            $res['SignNameJson'] = $this->signNameJson;
        }
        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }
        if (null !== $this->smsTemplateParamJson) {
            $res['SmsTemplateParamJson'] = $this->smsTemplateParamJson;
        }
        if (null !== $this->smsUpExtendCodeJson) {
            $res['SmsUpExtendCodeJson'] = $this->smsUpExtendCodeJson;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParamJson) {
            $res['TemplateParamJson'] = $this->templateParamJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendBatchCardSmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardTemplateCode'])) {
            $model->cardTemplateCode = $map['CardTemplateCode'];
        }
        if (isset($map['CardTemplateParamJson'])) {
            $model->cardTemplateParamJson = $map['CardTemplateParamJson'];
        }
        if (isset($map['DigitalTemplateCode'])) {
            $model->digitalTemplateCode = $map['DigitalTemplateCode'];
        }
        if (isset($map['DigitalTemplateParamJson'])) {
            $model->digitalTemplateParamJson = $map['DigitalTemplateParamJson'];
        }
        if (isset($map['FallbackType'])) {
            $model->fallbackType = $map['FallbackType'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PhoneNumberJson'])) {
            $model->phoneNumberJson = $map['PhoneNumberJson'];
        }
        if (isset($map['SignNameJson'])) {
            $model->signNameJson = $map['SignNameJson'];
        }
        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }
        if (isset($map['SmsTemplateParamJson'])) {
            $model->smsTemplateParamJson = $map['SmsTemplateParamJson'];
        }
        if (isset($map['SmsUpExtendCodeJson'])) {
            $model->smsUpExtendCodeJson = $map['SmsUpExtendCodeJson'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParamJson'])) {
            $model->templateParamJson = $map['TemplateParamJson'];
        }

        return $model;
    }
}
