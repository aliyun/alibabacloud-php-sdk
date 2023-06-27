<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SendMessageWithTemplateRequest extends Model
{
    /**
     * @description The signature. To query the signature, log on to the [Short Message Service (SMS) console](https://sms-intl.console.aliyun.com/overview) and navigate to the **Signatures** tab of the **Go China** page.
     *
     * @example Alicloud321
     *
     * @var string
     */
    public $from;

    /**
     * @description The extension code of the MO message.
     *
     * @example 90999
     *
     * @var string
     */
    public $smsUpExtendCode;

    /**
     * @description The code of the message template. To query the code, log on to the [SMS console](https://sms-intl.console.aliyun.com/overview) and navigate to the **Templates** tab of the **Go China** page.
     *
     * @example SMS_****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The value of the variable in the message template. If a variable exists in the template, the parameter is required.
     *
     * @example {"code":"1234","product":"ytx"}
     *
     * @var string
     */
    public $templateParam;

    /**
     * @description The mobile phone number to which the message is sent. You must add the country code to the beginning of the mobile phone number. Example: 861503871\*\*\*\*.
     *
     * For more information, see [Dialing codes](https://www.alibabacloud.com/help/zh/short-message-service/latest/dialing-codes).
     * @example 861503871****
     *
     * @var string
     */
    public $to;

    /**
     * @example 1
     *
     * @var int
     */
    public $validityPeriod;
    protected $_name = [
        'from'            => 'From',
        'smsUpExtendCode' => 'SmsUpExtendCode',
        'templateCode'    => 'TemplateCode',
        'templateParam'   => 'TemplateParam',
        'to'              => 'To',
        'validityPeriod'  => 'ValidityPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
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
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->validityPeriod) {
            $res['ValidityPeriod'] = $this->validityPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageWithTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
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
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['ValidityPeriod'])) {
            $model->validityPeriod = $map['ValidityPeriod'];
        }

        return $model;
    }
}
