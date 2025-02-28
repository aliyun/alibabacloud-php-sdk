<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CreateOrderForDeleteDBNodesRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $businessInfo;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $commodityCode;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string[]
     */
    public $DBNodeId;
    /**
     * @var string
     */
    public $engineVersion;
    /**
     * @var string
     */
    public $nodeType;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $promotionCode;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resource;
    /**
     * @var string
     */
    public $resourceGroupId;
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
    public $zoneId;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'commodityCode'        => 'CommodityCode',
        'DBInstanceId'         => 'DBInstanceId',
        'DBNodeId'             => 'DBNodeId',
        'engineVersion'        => 'EngineVersion',
        'nodeType'             => 'NodeType',
        'ownerId'              => 'OwnerId',
        'promotionCode'        => 'PromotionCode',
        'regionId'             => 'RegionId',
        'resource'             => 'Resource',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeId)) {
            Model::validateArray($this->DBNodeId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBNodeId) {
            if (\is_array($this->DBNodeId)) {
                $res['DBNodeId'] = [];
                $n1              = 0;
                foreach ($this->DBNodeId as $item1) {
                    $res['DBNodeId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBNodeId'])) {
            if (!empty($map['DBNodeId'])) {
                $model->DBNodeId = [];
                $n1              = 0;
                foreach ($map['DBNodeId'] as $item1) {
                    $model->DBNodeId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
