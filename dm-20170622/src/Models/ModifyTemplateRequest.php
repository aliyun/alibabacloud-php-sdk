<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models;

use AlibabaCloud\Tea\Model;

class ModifyTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $fromType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var int
     */
    public $smsType;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $templateId;

    /**
     * @description This parameter is required.
     *
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
    public $templateSubject;

    /**
     * @var string
     */
    public $templateText;
    protected $_name = [
        'fromType'             => 'FromType',
        'ownerId'              => 'OwnerId',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'smsContent'           => 'SmsContent',
        'smsType'              => 'SmsType',
        'templateId'           => 'TemplateId',
        'templateName'         => 'TemplateName',
        'templateNickName'     => 'TemplateNickName',
        'templateSubject'      => 'TemplateSubject',
        'templateText'         => 'TemplateText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromType) {
            $res['FromType'] = $this->fromType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }
        if (null !== $this->smsType) {
            $res['SmsType'] = $this->smsType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateNickName) {
            $res['TemplateNickName'] = $this->templateNickName;
        }
        if (null !== $this->templateSubject) {
            $res['TemplateSubject'] = $this->templateSubject;
        }
        if (null !== $this->templateText) {
            $res['TemplateText'] = $this->templateText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromType'])) {
            $model->fromType = $map['FromType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }
        if (isset($map['SmsType'])) {
            $model->smsType = $map['SmsType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateNickName'])) {
            $model->templateNickName = $map['TemplateNickName'];
        }
        if (isset($map['TemplateSubject'])) {
            $model->templateSubject = $map['TemplateSubject'];
        }
        if (isset($map['TemplateText'])) {
            $model->templateText = $map['TemplateText'];
        }

        return $model;
    }
}
