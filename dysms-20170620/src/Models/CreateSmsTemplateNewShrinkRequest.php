<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsTemplateNewShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $aiTemplate;

    /**
     * @var string
     */
    public $aiTemplateUuid;

    /**
     * @var int
     */
    public $applicationSceneId;

    /**
     * @var string
     */
    public $applySource;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $intlType;

    /**
     * @var string
     */
    public $moreDataShrink;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $ossKeys;

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
    public $productUrl;

    /**
     * @var string
     */
    public $relatedSignName;

    /**
     * @var string
     */
    public $relatedSignOrderId;

    /**
     * @var string
     */
    public $relatedSignUsageName;

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
     * @var int
     */
    public $rmdTemplateId;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateRule;

    /**
     * @var string
     */
    public $userViewFileName;
    protected $_name = [
        'aiTemplate' => 'AiTemplate',
        'aiTemplateUuid' => 'AiTemplateUuid',
        'applicationSceneId' => 'ApplicationSceneId',
        'applySource' => 'ApplySource',
        'bizType' => 'BizType',
        'intlType' => 'IntlType',
        'moreDataShrink' => 'MoreData',
        'orderId' => 'OrderId',
        'ossKeys' => 'OssKeys',
        'ownerId' => 'OwnerId',
        'prodCode' => 'ProdCode',
        'productUrl' => 'ProductUrl',
        'relatedSignName' => 'RelatedSignName',
        'relatedSignOrderId' => 'RelatedSignOrderId',
        'relatedSignUsageName' => 'RelatedSignUsageName',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'rmdTemplateId' => 'RmdTemplateId',
        'templateCode' => 'TemplateCode',
        'templateContent' => 'TemplateContent',
        'templateName' => 'TemplateName',
        'templateRule' => 'TemplateRule',
        'userViewFileName' => 'UserViewFileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiTemplate) {
            $res['AiTemplate'] = $this->aiTemplate;
        }

        if (null !== $this->aiTemplateUuid) {
            $res['AiTemplateUuid'] = $this->aiTemplateUuid;
        }

        if (null !== $this->applicationSceneId) {
            $res['ApplicationSceneId'] = $this->applicationSceneId;
        }

        if (null !== $this->applySource) {
            $res['ApplySource'] = $this->applySource;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->intlType) {
            $res['IntlType'] = $this->intlType;
        }

        if (null !== $this->moreDataShrink) {
            $res['MoreData'] = $this->moreDataShrink;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->ossKeys) {
            $res['OssKeys'] = $this->ossKeys;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->productUrl) {
            $res['ProductUrl'] = $this->productUrl;
        }

        if (null !== $this->relatedSignName) {
            $res['RelatedSignName'] = $this->relatedSignName;
        }

        if (null !== $this->relatedSignOrderId) {
            $res['RelatedSignOrderId'] = $this->relatedSignOrderId;
        }

        if (null !== $this->relatedSignUsageName) {
            $res['RelatedSignUsageName'] = $this->relatedSignUsageName;
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

        if (null !== $this->rmdTemplateId) {
            $res['RmdTemplateId'] = $this->rmdTemplateId;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateRule) {
            $res['TemplateRule'] = $this->templateRule;
        }

        if (null !== $this->userViewFileName) {
            $res['UserViewFileName'] = $this->userViewFileName;
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
        if (isset($map['AiTemplate'])) {
            $model->aiTemplate = $map['AiTemplate'];
        }

        if (isset($map['AiTemplateUuid'])) {
            $model->aiTemplateUuid = $map['AiTemplateUuid'];
        }

        if (isset($map['ApplicationSceneId'])) {
            $model->applicationSceneId = $map['ApplicationSceneId'];
        }

        if (isset($map['ApplySource'])) {
            $model->applySource = $map['ApplySource'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['IntlType'])) {
            $model->intlType = $map['IntlType'];
        }

        if (isset($map['MoreData'])) {
            $model->moreDataShrink = $map['MoreData'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OssKeys'])) {
            $model->ossKeys = $map['OssKeys'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['ProductUrl'])) {
            $model->productUrl = $map['ProductUrl'];
        }

        if (isset($map['RelatedSignName'])) {
            $model->relatedSignName = $map['RelatedSignName'];
        }

        if (isset($map['RelatedSignOrderId'])) {
            $model->relatedSignOrderId = $map['RelatedSignOrderId'];
        }

        if (isset($map['RelatedSignUsageName'])) {
            $model->relatedSignUsageName = $map['RelatedSignUsageName'];
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

        if (isset($map['RmdTemplateId'])) {
            $model->rmdTemplateId = $map['RmdTemplateId'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateRule'])) {
            $model->templateRule = $map['TemplateRule'];
        }

        if (isset($map['UserViewFileName'])) {
            $model->userViewFileName = $map['UserViewFileName'];
        }

        return $model;
    }
}
