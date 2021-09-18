<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SendMessageWithTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateParam;

    /**
     * @var string
     */
    public $smsUpExtendCode;
    protected $_name = [
        'to'              => 'To',
        'from'            => 'From',
        'templateCode'    => 'TemplateCode',
        'templateParam'   => 'TemplateParam',
        'smsUpExtendCode' => 'SmsUpExtendCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParam) {
            $res['TemplateParam'] = $this->templateParam;
        }
        if (null !== $this->smsUpExtendCode) {
            $res['SmsUpExtendCode'] = $this->smsUpExtendCode;
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
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParam'])) {
            $model->templateParam = $map['TemplateParam'];
        }
        if (isset($map['SmsUpExtendCode'])) {
            $model->smsUpExtendCode = $map['SmsUpExtendCode'];
        }

        return $model;
    }
}
