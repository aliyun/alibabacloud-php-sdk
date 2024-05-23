<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ListClassesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The commodity code of the instances.
     *
     *   **bards_intl**: The instances are pay-as-you-go primary instances.
     *   **rds_intl**: The instances are subscription primary instances.
     *   **rords_intl**: The instances are pay-as-you-go read-only instances.
     *   **rds_rordspre_public_intl**: The instances are subscription read-only instances.
     *
     * This parameter is required.
     * @example bards_intl
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * >  If you set the **CommodityCode** parameter to the commodity code of read-only instances, you must specify this parameter.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of order that you want to query. Valid values:
     *
     *   **BUY**: specifies the query orders that are used to purchase instances.
     *   **UPGRADE**: specifies the query orders that are used to change the specifications of instances.
     *   **RENEW**: specifies the query orders that are used to renew instances.
     *   **CONVERT**: specifies the query orders that are used to change the billing methods of instances.
     *
     * This parameter is required.
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * >  If you are using an Alibaba Cloud account on the International site (alibabacloud.com), you must specify this parameter.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'commodityCode'        => 'CommodityCode',
        'DBInstanceId'         => 'DBInstanceId',
        'orderType'            => 'OrderType',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClassesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
