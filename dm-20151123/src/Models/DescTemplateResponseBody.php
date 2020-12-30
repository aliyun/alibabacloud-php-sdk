<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DescTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $smsType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $templateText;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateNickName;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $templateSubject;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $templateStatus;
    protected $_name = [
        'smsType'          => 'SmsType',
        'requestId'        => 'RequestId',
        'createTime'       => 'CreateTime',
        'templateText'     => 'TemplateText',
        'smsContent'       => 'SmsContent',
        'templateName'     => 'TemplateName',
        'templateNickName' => 'TemplateNickName',
        'templateType'     => 'TemplateType',
        'templateSubject'  => 'TemplateSubject',
        'remark'           => 'Remark',
        'templateStatus'   => 'TemplateStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smsType) {
            $res['SmsType'] = $this->smsType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->templateText) {
            $res['TemplateText'] = $this->templateText;
        }
        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateNickName) {
            $res['TemplateNickName'] = $this->templateNickName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->templateSubject) {
            $res['TemplateSubject'] = $this->templateSubject;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SmsType'])) {
            $model->smsType = $map['SmsType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TemplateText'])) {
            $model->templateText = $map['TemplateText'];
        }
        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateNickName'])) {
            $model->templateNickName = $map['TemplateNickName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TemplateSubject'])) {
            $model->templateSubject = $map['TemplateSubject'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }

        return $model;
    }
}
