<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $bizUrl;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

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
    public $smsTemplateContent;

    /**
     * @var string
     */
    public $smsTemplateName;

    /**
     * @var string
     */
    public $smsTemplateRule;
    protected $_name = [
        'bizUrl' => 'BizUrl',
        'businessType' => 'BusinessType',
        'ownerId' => 'OwnerId',
        'prodCode' => 'ProdCode',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'smsTemplateContent' => 'SmsTemplateContent',
        'smsTemplateName' => 'SmsTemplateName',
        'smsTemplateRule' => 'SmsTemplateRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUrl) {
            $res['BizUrl'] = $this->bizUrl;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
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

        if (null !== $this->smsTemplateContent) {
            $res['SmsTemplateContent'] = $this->smsTemplateContent;
        }

        if (null !== $this->smsTemplateName) {
            $res['SmsTemplateName'] = $this->smsTemplateName;
        }

        if (null !== $this->smsTemplateRule) {
            $res['SmsTemplateRule'] = $this->smsTemplateRule;
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
        if (isset($map['BizUrl'])) {
            $model->bizUrl = $map['BizUrl'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
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

        if (isset($map['SmsTemplateContent'])) {
            $model->smsTemplateContent = $map['SmsTemplateContent'];
        }

        if (isset($map['SmsTemplateName'])) {
            $model->smsTemplateName = $map['SmsTemplateName'];
        }

        if (isset($map['SmsTemplateRule'])) {
            $model->smsTemplateRule = $map['SmsTemplateRule'];
        }

        return $model;
    }
}
