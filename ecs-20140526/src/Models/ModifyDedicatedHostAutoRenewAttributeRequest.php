<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostAutoRenewAttributeRequest extends Model
{
    /**
     * @description Specifies whether to automatically renew the subscription dedicated host. Valid values:
     *
     *   true: automatically renews the subscription dedicated host.
     *   false: does not automatically renew the subscription dedicated host.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description Specifies whether to automatically renew the subscription dedicated host along with the subscription ECS instances hosted on it.
     *
     * Valid values:
     *
     *   AutoRenewWithEcs: automatically renews the subscription dedicated host along with the subscription ECS instances hosted on it.
     *   StopRenewWithEcs: does not automatically renew the subscription dedicated host along with the subscription ECS instances hosted on it.
     *   NoOperation: does not change the current settings for the dedicated host.
     *
     * Default value: NoOperation.
     * @example StopRenewWithEcs
     *
     * @var string
     */
    public $autoRenewWithEcs;

    /**
     * @description The IDs of the dedicated hosts. You can specify up to 100 subscription dedicated host IDs. Separate multiple IDs with commas (,).
     *
     * @example dh-bp165p6xk2tlw61e****
     *
     * @var string
     */
    public $dedicatedHostIds;

    /**
     * @description The renewal duration of the dedicated host. Valid values:
     *
     *   When the PeriodUnit parameter is set to Week, the valid values of the Duration parameter are 1, 2, and 3.
     *   When the PeriodUnit parameter is set to Month, the valid values of the Duration parameter are 1, 2, 3, 6, and 12.
     *
     * @example 1
     *
     * @var int
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
     * @description The unit of the renewal duration. Valid values:
     *
     *   Week
     *   Month
     *
     * Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The region ID of the dedicated host.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to automatically renew the subscription dedicated host. The `RenewalStatus` parameter takes precedence over the `AutoRenew` parameter. Valid values:
     *
     *   AutoRenewal: automatically renews the subscription dedicated host.
     *   Normal: does not automatically renew the subscription dedicated host, but notifications for renewal are sent.
     *   NotRenewal: does not automatically renew the subscription dedicated host, and no expiration notification is sent. Notifications for renewal are automatically sent three days before the expiration time of the subscription dedicated host. You can change the value of this parameter from NotRenewal to Normal for the dedicated host and manually renew it by calling the [RenewDedicatedHosts](~~134250~~) operation. Alternatively, you can renew it by setting this parameter to AutoRenewal.
     *
     * @example Normal
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'autoRenew'            => 'AutoRenew',
        'autoRenewWithEcs'     => 'AutoRenewWithEcs',
        'dedicatedHostIds'     => 'DedicatedHostIds',
        'duration'             => 'Duration',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'periodUnit'           => 'PeriodUnit',
        'regionId'             => 'RegionId',
        'renewalStatus'        => 'RenewalStatus',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewWithEcs) {
            $res['AutoRenewWithEcs'] = $this->autoRenewWithEcs;
        }
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = $this->dedicatedHostIds;
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
     * @return ModifyDedicatedHostAutoRenewAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewWithEcs'])) {
            $model->autoRenewWithEcs = $map['AutoRenewWithEcs'];
        }
        if (isset($map['DedicatedHostIds'])) {
            $model->dedicatedHostIds = $map['DedicatedHostIds'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
