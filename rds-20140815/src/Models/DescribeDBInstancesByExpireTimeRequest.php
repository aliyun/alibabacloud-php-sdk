<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancesByExpireTimeRequest extends Model
{
    /**
     * @description The number of remaining days for which the instances are available. Valid values: **0 to 180**.
     *
     * @example 180
     *
     * @var int
     */
    public $expirePeriod;

    /**
     * @description Specifies whether to query instances that have expired. Valid values:
     *
     *   **True**: queries instances that have expired.
     *   **False**: does not query instances that have expired.
     *
     * @example True
     *
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: any **non-zero** positive integer.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **1 to 100**.
     *
     * Default value: **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
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

    /**
     * @description The tag that is added to the instance. Each tag is a key-value pair that consists of two parts: TagKey and TagValue. You can specify a maximum of five tags in the following format for each request: `{"key1":"value1","key2":"value2"...}`.
     *
     * @example {"key1":"value1"}
     *
     * @var string
     */
    public $tags;

    /**
     * @description A deprecated parameter.
     *
     * @example None
     *
     * @var string
     */
    public $proxyId;
    protected $_name = [
        'expirePeriod'         => 'ExpirePeriod',
        'expired'              => 'Expired',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tags'                 => 'Tags',
        'proxyId'              => 'proxyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expirePeriod) {
            $res['ExpirePeriod'] = $this->expirePeriod;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->proxyId) {
            $res['proxyId'] = $this->proxyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancesByExpireTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpirePeriod'])) {
            $model->expirePeriod = $map['ExpirePeriod'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['proxyId'])) {
            $model->proxyId = $map['proxyId'];
        }

        return $model;
    }
}
