<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models\QueryTemplateByParamResponseBody\data;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $smsStatus;

    /**
     * @var int
     */
    public $smsTemplateCode;

    /**
     * @var int
     */
    public $smsrejectinfo;

    /**
     * @var string
     */
    public $templateComment;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateStatus;

    /**
     * @var int
     */
    public $templateType;

    /**
     * @var int
     */
    public $utcCreatetime;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'smsStatus'       => 'SmsStatus',
        'smsTemplateCode' => 'SmsTemplateCode',
        'smsrejectinfo'   => 'Smsrejectinfo',
        'templateComment' => 'TemplateComment',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateStatus'  => 'TemplateStatus',
        'templateType'    => 'TemplateType',
        'utcCreatetime'   => 'UtcCreatetime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->smsStatus) {
            $res['SmsStatus'] = $this->smsStatus;
        }
        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }
        if (null !== $this->smsrejectinfo) {
            $res['Smsrejectinfo'] = $this->smsrejectinfo;
        }
        if (null !== $this->templateComment) {
            $res['TemplateComment'] = $this->templateComment;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->utcCreatetime) {
            $res['UtcCreatetime'] = $this->utcCreatetime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SmsStatus'])) {
            $model->smsStatus = $map['SmsStatus'];
        }
        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }
        if (isset($map['Smsrejectinfo'])) {
            $model->smsrejectinfo = $map['Smsrejectinfo'];
        }
        if (isset($map['TemplateComment'])) {
            $model->templateComment = $map['TemplateComment'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['UtcCreatetime'])) {
            $model->utcCreatetime = $map['UtcCreatetime'];
        }

        return $model;
    }
}
