<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Dara\Model;

class SendMessageWithTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $from;

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

    /**
     * @var string
     */
    public $to;

    /**
     * @var int
     */
    public $validityPeriod;
    protected $_name = [
        'channelId' => 'ChannelId',
        'from' => 'From',
        'smsUpExtendCode' => 'SmsUpExtendCode',
        'templateCode' => 'TemplateCode',
        'templateParam' => 'TemplateParam',
        'to' => 'To',
        'validityPeriod' => 'ValidityPeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

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
