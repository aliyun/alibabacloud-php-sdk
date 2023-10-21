<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderForDeleteDBNodesShrinkRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $businessInfo;

    /**
     * @example ETnLKlblzczshOTUbOCzxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example bards
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example rm-8vb9pvt6807b47orr
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBNodeIdShrink;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example aliwood-1688-mobile-promotion
     *
     * @var string
     */
    public $promotionCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example buy
     *
     * @var string
     */
    public $resource;

    /**
     * @example rg-acfmy*****
     *
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
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'commodityCode'        => 'CommodityCode',
        'DBInstanceId'         => 'DBInstanceId',
        'DBNodeIdShrink'       => 'DBNodeId',
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
    }

    public function toMap()
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
        if (null !== $this->DBNodeIdShrink) {
            $res['DBNodeId'] = $this->DBNodeIdShrink;
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

    /**
     * @param array $map
     *
     * @return CreateOrderForDeleteDBNodesShrinkRequest
     */
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
            $model->DBNodeIdShrink = $map['DBNodeId'];
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
