<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeLicenseOrdersRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud order. The value can be the ID of a virtual order.
     *
     * @example 239618016570503
     *
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The type of the package. Valid values:
     *
     *   single_node_subscribe: Single-node Edition (Subscription).
     *   single_node_long_term: Single-node Edition (Long-term).
     *   primary_backup_subscribe: HA Edition (Subscription).
     *   primary_backup_long_term: HA Edition (Long-term).
     *   pre_generation_long_term: Pre-generated (Long-term).
     *
     * @example single_node_subscribe
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The purchase channel. Valid values: aliyun_market and aliyun_public. aliyun_market specifies Alibaba Cloud Marketplace. aliyun_public specifies the PolarDB buy page.
     *
     * @example aliyun_market
     *
     * @var string
     */
    public $purchaseChannel;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to query only virtual orders.
     *
     * @var bool
     */
    public $virtualOrder;
    protected $_name = [
        'aliyunOrderId'        => 'AliyunOrderId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'packageType'          => 'PackageType',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'purchaseChannel'      => 'PurchaseChannel',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'virtualOrder'         => 'VirtualOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->purchaseChannel) {
            $res['PurchaseChannel'] = $this->purchaseChannel;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->virtualOrder) {
            $res['VirtualOrder'] = $this->virtualOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLicenseOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PurchaseChannel'])) {
            $model->purchaseChannel = $map['PurchaseChannel'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VirtualOrder'])) {
            $model->virtualOrder = $map['VirtualOrder'];
        }

        return $model;
    }
}
