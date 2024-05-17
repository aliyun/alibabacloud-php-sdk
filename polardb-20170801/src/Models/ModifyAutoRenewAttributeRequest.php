<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoRenewAttributeRequest extends Model
{
    /**
     * @description The cluster ID. If you need to specify multiple cluster IDs, separate the cluster IDs with commas (,).
     *
     * This parameter is required.
     * @example pc-***************
     *
     * @var string
     */
    public $DBClusterIds;

    /**
     * @description The automatic renewal period.
     *
     *
     *   Valid values when **PeriodUnit** is set to **Month**: `1, 2, 3, 6, and 12`.
     *   Valid values when **PeriodUnit** is set to **Year**: `1, 2, and 3`.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The unit of the renewal period. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * Default value: **Month**.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the region. The region ID can be up to 50 characters in length.
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The auto-renewal state of the cluster. Valid values:
     *
     *   **AutoRenewal:** The cluster are automatically renewed.
     *   **Normal**: The cluster is manually renewed.
     *   **NotRenewal:** The cluster is not renewed after expiration.
     *
     * Default value: **AutoRenewal**.
     *
     * >  If this parameter is set to **NotRenewal**, the system does not send a text message for the cluster expiration, but only sends a message three days before the cluster expires to remind you that the cluster is not renewed.
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewalStatus;

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
        'DBClusterIds'         => 'DBClusterIds',
        'duration'             => 'Duration',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'periodUnit'           => 'PeriodUnit',
        'regionId'             => 'RegionId',
        'renewalStatus'        => 'RenewalStatus',
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
        if (null !== $this->DBClusterIds) {
            $res['DBClusterIds'] = $this->DBClusterIds;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
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
     * @return ModifyAutoRenewAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterIds'])) {
            $model->DBClusterIds = $map['DBClusterIds'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
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
