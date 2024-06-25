<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendCardSmsRequest\cardObjects;
use AlibabaCloud\Tea\Model;

class SendCardSmsRequest extends Model
{
    /**
     * @description The objects of the message template.
     *
     * This parameter is required.
     * @var cardObjects[]
     */
    public $cardObjects;

    /**
     * @description The code of the message template. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * This parameter is required.
     * @example CARD_SMS_70
     *
     * @var string
     */
    public $cardTemplateCode;

    /**
     * @description The code of the digital message template that applies when the card message is rolled back. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * > Make sure that the message template has been approved.
     * @example SMS_003
     *
     * @var string
     */
    public $digitalTemplateCode;

    /**
     * @description The variables of the digital message template.
     *
     * > If you need to add line breaks to the JSON template, make sure that the format is valid.
     * @example {\\"msg\\",\\"xxxd\\"}
     *
     * @var string
     */
    public $digitalTemplateParam;

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
     * @example 38d76c9b-4a9a-4c89-afae-61fd8e0e****
     *
     * @var string
     */
    public $outId;

    /**
     * @description The signature. You can view the template code in the **Signature** column on the **Signaturess** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * This parameter is required.
     * @var string
     */
    public $signName;

    /**
     * @description The code of the text message template that applies when the card message is rolled back. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * > Make sure that the message template has been approved. If you set the **FallbackType** parameter to **SMS**, this parameter is required.
     * @example SIER_TEST_01
     *
     * @var string
     */
    public $smsTemplateCode;

    /**
     * @description The variables of the text message template.
     *
     * > If you need to add line breaks to the JSON template, make sure that the format is valid.
     * @var string
     */
    public $smsTemplateParam;

    /**
     * @description The extension code of the upstream message. Upstream messages are messages sent to the communication service provider. Upstream messages are used to customize a service, complete an inquiry, or send a request. You are charged for sending upstream messages based on the billing standards of the service provider.
     *
     * > If you do not need upstream messages, ignore this parameter.
     * @example 1
     *
     * @var string
     */
    public $smsUpExtendCode;

    /**
     * @description The code of the text message template.
     *
     * Log on to the Alibaba Cloud SMS console. In the left-side navigation pane, click **Go Globe** or **Go China**. You can view the message template in the **Template Code** column on the **Message Templates** tab.
     *
     * > The message templates must be created on the Go Globe page and approved.
     * @example SMS_2322****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The variables of the message template. Format: JSON.
     *
     * > If you need to add line breaks to the JSON template, make sure that the format is valid.
     * @example {
     * }
     * @var string
     */
    public $templateParam;
    protected $_name = [
        'cardObjects'          => 'CardObjects',
        'cardTemplateCode'     => 'CardTemplateCode',
        'digitalTemplateCode'  => 'DigitalTemplateCode',
        'digitalTemplateParam' => 'DigitalTemplateParam',
        'fallbackType'         => 'FallbackType',
        'outId'                => 'OutId',
        'signName'             => 'SignName',
        'smsTemplateCode'      => 'SmsTemplateCode',
        'smsTemplateParam'     => 'SmsTemplateParam',
        'smsUpExtendCode'      => 'SmsUpExtendCode',
        'templateCode'         => 'TemplateCode',
        'templateParam'        => 'TemplateParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardObjects) {
            $res['CardObjects'] = [];
            if (null !== $this->cardObjects && \is_array($this->cardObjects)) {
                $n = 0;
                foreach ($this->cardObjects as $item) {
                    $res['CardObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cardTemplateCode) {
            $res['CardTemplateCode'] = $this->cardTemplateCode;
        }
        if (null !== $this->digitalTemplateCode) {
            $res['DigitalTemplateCode'] = $this->digitalTemplateCode;
        }
        if (null !== $this->digitalTemplateParam) {
            $res['DigitalTemplateParam'] = $this->digitalTemplateParam;
        }
        if (null !== $this->fallbackType) {
            $res['FallbackType'] = $this->fallbackType;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }
        if (null !== $this->smsTemplateParam) {
            $res['SmsTemplateParam'] = $this->smsTemplateParam;
        }
        if (null !== $this->smsUpExtendCode) {
            $res['SmsUpExtendCode'] = $this->smsUpExtendCode;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParam) {
            $res['TemplateParam'] = $this->templateParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCardSmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardObjects'])) {
            if (!empty($map['CardObjects'])) {
                $model->cardObjects = [];
                $n                  = 0;
                foreach ($map['CardObjects'] as $item) {
                    $model->cardObjects[$n++] = null !== $item ? cardObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CardTemplateCode'])) {
            $model->cardTemplateCode = $map['CardTemplateCode'];
        }
        if (isset($map['DigitalTemplateCode'])) {
            $model->digitalTemplateCode = $map['DigitalTemplateCode'];
        }
        if (isset($map['DigitalTemplateParam'])) {
            $model->digitalTemplateParam = $map['DigitalTemplateParam'];
        }
        if (isset($map['FallbackType'])) {
            $model->fallbackType = $map['FallbackType'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }
        if (isset($map['SmsTemplateParam'])) {
            $model->smsTemplateParam = $map['SmsTemplateParam'];
        }
        if (isset($map['SmsUpExtendCode'])) {
            $model->smsUpExtendCode = $map['SmsUpExtendCode'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParam'])) {
            $model->templateParam = $map['TemplateParam'];
        }

        return $model;
    }
}
