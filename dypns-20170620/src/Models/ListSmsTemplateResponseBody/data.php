<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\ListSmsTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $bizUrl;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var int
     */
    public $createDate;

    /**
     * @var bool
     */
    public $defaultFlag;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $smsTemplateCode;

    /**
     * @var string
     */
    public $smsTemplateContent;

    /**
     * @var string
     */
    public $smsTemplateName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'auditResult' => 'AuditResult',
        'bizUrl' => 'BizUrl',
        'businessType' => 'BusinessType',
        'createDate' => 'CreateDate',
        'defaultFlag' => 'DefaultFlag',
        'remark' => 'Remark',
        'smsTemplateCode' => 'SmsTemplateCode',
        'smsTemplateContent' => 'SmsTemplateContent',
        'smsTemplateName' => 'SmsTemplateName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }

        if (null !== $this->bizUrl) {
            $res['BizUrl'] = $this->bizUrl;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->defaultFlag) {
            $res['DefaultFlag'] = $this->defaultFlag;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }

        if (null !== $this->smsTemplateContent) {
            $res['SmsTemplateContent'] = $this->smsTemplateContent;
        }

        if (null !== $this->smsTemplateName) {
            $res['SmsTemplateName'] = $this->smsTemplateName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }

        if (isset($map['BizUrl'])) {
            $model->bizUrl = $map['BizUrl'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DefaultFlag'])) {
            $model->defaultFlag = $map['DefaultFlag'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }

        if (isset($map['SmsTemplateContent'])) {
            $model->smsTemplateContent = $map['SmsTemplateContent'];
        }

        if (isset($map['SmsTemplateName'])) {
            $model->smsTemplateName = $map['SmsTemplateName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
