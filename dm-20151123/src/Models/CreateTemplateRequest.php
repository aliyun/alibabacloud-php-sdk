<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $templateType;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateSubject;

    /**
     * @var string
     */
    public $templateNickName;

    /**
     * @var string
     */
    public $templateText;

    /**
     * @var int
     */
    public $smsType;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $fromType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateType'         => 'TemplateType',
        'templateName'         => 'TemplateName',
        'templateSubject'      => 'TemplateSubject',
        'templateNickName'     => 'TemplateNickName',
        'templateText'         => 'TemplateText',
        'smsType'              => 'SmsType',
        'smsContent'           => 'SmsContent',
        'remark'               => 'Remark',
        'fromType'             => 'FromType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateSubject) {
            $res['TemplateSubject'] = $this->templateSubject;
        }
        if (null !== $this->templateNickName) {
            $res['TemplateNickName'] = $this->templateNickName;
        }
        if (null !== $this->templateText) {
            $res['TemplateText'] = $this->templateText;
        }
        if (null !== $this->smsType) {
            $res['SmsType'] = $this->smsType;
        }
        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->fromType) {
            $res['FromType'] = $this->fromType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateSubject'])) {
            $model->templateSubject = $map['TemplateSubject'];
        }
        if (isset($map['TemplateNickName'])) {
            $model->templateNickName = $map['TemplateNickName'];
        }
        if (isset($map['TemplateText'])) {
            $model->templateText = $map['TemplateText'];
        }
        if (isset($map['SmsType'])) {
            $model->smsType = $map['SmsType'];
        }
        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['FromType'])) {
            $model->fromType = $map['FromType'];
        }

        return $model;
    }
}
