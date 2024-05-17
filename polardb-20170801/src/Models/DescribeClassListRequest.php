<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeClassListRequest extends Model
{
    /**
     * @description The code of the commodity. Valid values:
     *
     *   polardb_sub: the subscription cluster in regions in the Chinese mainland
     *   polardb_sub _intl: the subscription cluster in regions outside the Chinese mainland
     *   polardb_payg: the pay-as-you-go cluster in regions in the Chinese mainland
     *   polardb_payg_intl: the pay-as-you-go cluster in regions outside the Chinese mainland
     *   polardb_sub_jushita: the subscription cluster for CloudTmall
     *   polardb_payg_jushita: the pay-as-you-go cluster for CloudTmall
     *   polardb_sub_cainiao: the subscription cluster for Cainiao
     *   polardb_payg_cainiao: the pay-as-you-go cluster for Cainiao
     *
     * > *   If you use an Alibaba Cloud account on the China site, you can view only the codes of the commodities that are available in the Chinese mainland.
     * >*   If you are using an Alibaba Cloud international account, you can view only the codes of the commodities that are available outside the Chinese mainland.
     * >*   If you use a CloudTmall account, you can view only the codes of the commodities that are available in CloudTmall.
     * >*   If you use a Cainiao account, you can view only the codes of the commodities that are available in Cainiao.
     *
     * This parameter is required.
     * @example polardb_sub
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The number of nodes. Valid values:
     *
     *   single: Standalone Edition.
     *   cluster: Cluster Edition.
     *   all: both Standalone Edition and Cluster Edition.
     *
     * @example cluster
     *
     * @var string
     */
    public $masterHa;

    /**
     * @description The type of the order. Valid values:
     *
     *   BUY: The order is used to purchase a cluster.
     *   UPGRADE: The order is used to change the specifications of a cluster.
     *   RENEW: The order is used to renew a cluster.
     *   CONVERT: The order is used to change the billing method of a cluster.
     *
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
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
    protected $_name = [
        'commodityCode'        => 'CommodityCode',
        'masterHa'             => 'MasterHa',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->masterHa) {
            $res['MasterHa'] = $this->masterHa;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClassListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['MasterHa'])) {
            $model->masterHa = $map['MasterHa'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
