<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\SmsTemplatePageListResponseBody\model;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var int
     */
    public $shortUrlTaskId;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $smsType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $templateType;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'properties' => 'Properties',
        'shortUrlTaskId' => 'ShortUrlTaskId',
        'sign' => 'Sign',
        'smsType' => 'SmsType',
        'status' => 'Status',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        if (null !== $this->shortUrlTaskId) {
            $res['ShortUrlTaskId'] = $this->shortUrlTaskId;
        }

        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }

        if (null !== $this->smsType) {
            $res['SmsType'] = $this->smsType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        if (isset($map['ShortUrlTaskId'])) {
            $model->shortUrlTaskId = $map['ShortUrlTaskId'];
        }

        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }

        if (isset($map['SmsType'])) {
            $model->smsType = $map['SmsType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
