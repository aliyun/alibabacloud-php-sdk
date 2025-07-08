<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateSmsSignShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $columnIndexMappingRuleShrink;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $moreDataShrink;

    /**
     * @var int
     */
    public $operationType;

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
    public $sceneType;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string
     */
    public $signOssKey;

    /**
     * @var string
     */
    public $userViewFileName;
    protected $_name = [
        'columnIndexMappingRuleShrink' => 'ColumnIndexMappingRule',
        'extendMessage' => 'ExtendMessage',
        'fileName' => 'FileName',
        'moreDataShrink' => 'MoreData',
        'operationType' => 'OperationType',
        'ossKeys' => 'OssKeys',
        'ownerId' => 'OwnerId',
        'prodCode' => 'ProdCode',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sceneType' => 'SceneType',
        'serviceType' => 'ServiceType',
        'signOssKey' => 'SignOssKey',
        'userViewFileName' => 'UserViewFileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnIndexMappingRuleShrink) {
            $res['ColumnIndexMappingRule'] = $this->columnIndexMappingRuleShrink;
        }

        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->moreDataShrink) {
            $res['MoreData'] = $this->moreDataShrink;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
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

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->signOssKey) {
            $res['SignOssKey'] = $this->signOssKey;
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
        if (isset($map['ColumnIndexMappingRule'])) {
            $model->columnIndexMappingRuleShrink = $map['ColumnIndexMappingRule'];
        }

        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['MoreData'])) {
            $model->moreDataShrink = $map['MoreData'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
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

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['SignOssKey'])) {
            $model->signOssKey = $map['SignOssKey'];
        }

        if (isset($map['UserViewFileName'])) {
            $model->userViewFileName = $map['UserViewFileName'];
        }

        return $model;
    }
}
