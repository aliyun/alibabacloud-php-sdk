<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SendSmsSmartRequest extends Model
{
    /**
     * @var string
     */
    public $extendCode;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $numberType;

    /**
     * @var string
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $smsUpExtendCode;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateParam;
    protected $_name = [
        'extendCode'      => 'ExtendCode',
        'modelCode'       => 'ModelCode',
        'numberType'      => 'NumberType',
        'phoneNumbers'    => 'PhoneNumbers',
        'signName'        => 'SignName',
        'smsUpExtendCode' => 'SmsUpExtendCode',
        'templateCode'    => 'TemplateCode',
        'templateParam'   => 'TemplateParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendCode) {
            $res['ExtendCode'] = $this->extendCode;
        }
        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }
        if (null !== $this->numberType) {
            $res['NumberType'] = $this->numberType;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
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
     * @return SendSmsSmartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendCode'])) {
            $model->extendCode = $map['ExtendCode'];
        }
        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }
        if (isset($map['NumberType'])) {
            $model->numberType = $map['NumberType'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
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
