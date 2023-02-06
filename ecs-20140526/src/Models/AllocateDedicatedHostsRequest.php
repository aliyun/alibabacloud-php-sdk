<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsRequest\networkAttributes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsRequest\tag;
use AlibabaCloud\Tea\Model;

class AllocateDedicatedHostsRequest extends Model
{
    /**
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @description The policy used to migrate the instances deployed on the dedicated host when the dedicated host fails or needs to be repaired online. Valid values:
     *
     *   Migrate: Instances are migrated to another physical server and restarted.
     *
     * If the dedicated host is attached with cloud disks, the default value is Migrate.
     *
     *   Stop: The instances are stopped. If the dedicated host cannot be repaired, the instances are migrated to another physical server and restarted.
     *
     * If the dedicated host is attached with local disks, the default value is Stop.
     * @example Migrate
     *
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @description Specifies whether to add the dedicated host to the resource pool for automatic deployment. If you create an ECS instance on a dedicated host without specifying the **DedicatedHostId** parameter, Alibaba Cloud selects a dedicated host from the resource pool to host the instance. For more information, see [Automatic deployment](~~118938~~). Valid values:
     *
     *   on: The dedicated host is added to the resource pool for automatic deployment.
     *   off: The dedicated host is not added to the resource pool for automatic deployment.
     *
     * >  If you do not want to add the dedicated host to the resource pool for automatic deployment, set the value to off.
     * @example off
     *
     * @var string
     */
    public $autoPlacement;

    /**
     * @description The automatic release time of the dedicated host. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > *   It must be at least half an hour later than the current time.
     * > *   It must be at most three years later than the current time.
     * > *   If the value of seconds (ss) is not 00, it is automatically set to 00.
     * @example 2019-08-21T12:30:24Z
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description Specifies whether to automatically renew the subscription dedicated host.
     *
     * >  The **AutoRenew** parameter takes effect only when the **ChargeType** parameter is set to PrePaid.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of the dedicated host. Unit: months. Valid values: 1, 2, 3, 6, and 12.
     *
     * >  The **AutoRenewPeriod** parameter takes effect and is required only when the **AutoRenew** parameter is set to true.
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The billing method of the dedicated host. Default value: PostPaid. Valid values:
     *
     *   PrePaid: subscription. If you set this parameter to PrePaid, make sure that you have sufficient account balance or credit. Otherwise, InvalidPayMethod is returned.
     *   PostPaid: pay-as-you-go.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The CPU overcommit ratio. You can configure CPU overcommit ratios only for the following dedicated host types: g6s, c6s, and r6s. Valid values: 1 to 5.
     *
     * The CPU overcommit ratio affects the number of available vCPUs on a dedicated host. You can use the following formula to calculate the number of available vCPUs on a dedicated host: Number of available vCPUs = Number of physical CPU cores × 2 × CPU overcommit ratio. For example, the number of physical CPU cores on each g6s dedicated host is 52. If you set the CPU overcommit ratio of a g6s dedicated host to 4, the number of available vCPUs on the dedicated host is 416. For scenarios that have minimal requirements on CPU stability or where CPU load is not heavy, such as development and test environments, you can increase the number of available vCPUs on a dedicated host by increasing the CPU overcommit ratio. This way, you can deploy more ECS instances of the same specifications on the dedicated host and reduce the unit deployment cost.
     * @example 1
     *
     * @var float
     */
    public $cpuOverCommitRatio;

    /**
     * @description The ID of the dedicated host cluster to which to assign the dedicated host.
     *
     * @example dc-bp12wlf6am0vz9v2****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The name of the dedicated host. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example myDDH
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The type of the dedicated host. You can call the [DescribeDedicatedHostTypes](~~134240~~) operation to obtain the most recent list of dedicated host types.
     *
     * @example ddh.c5
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description The description of the dedicated host. The description must be 2 to 256 characters in length, and cannot start with `http://` or `https://`.
     *
     * @example This-is-my-DDH
     *
     * @var string
     */
    public $description;

    /**
     * @description The minimum number of dedicated hosts to create. Valid values: 1 to 100.
     *
     * >  If the number of available dedicated hosts is less than the minimum number of dedicated hosts to create, the dedicated hosts fail to be created.
     * @example 2
     *
     * @var int
     */
    public $minQuantity;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The subscription period of the dedicated host. The `Period` parameter is required and takes effect only when the `ChargeType` parameter is set to `PrePaid`. Valid values:
     *
     *   Valid values when the PeriodUnit parameter is set to Month: 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *   Valid values when the PeriodUnit parameter is set to Year: 1, 2, 3, 4, and 5.
     *
     * @example 6
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription period of the dedicated host. Valid values:
     *
     *   Month
     *   Year
     *
     * Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The number of dedicated hosts that you want to create. Valid values: 1 to 100.
     *
     * Default: 1.
     * @example 2
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The ID of the region in which to create the dedicated host. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the dedicated host.
     *
     * @example rg-bp67acfmxazb4ph***
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
     * @description The list of the tags that you want to add. It can be up to 20.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the zone in which to create the dedicated host.
     *
     * This parameter is empty by default. If you do not specify a zone, the system selects a zone.
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'networkAttributes'      => 'NetworkAttributes',
        'actionOnMaintenance'    => 'ActionOnMaintenance',
        'autoPlacement'          => 'AutoPlacement',
        'autoReleaseTime'        => 'AutoReleaseTime',
        'autoRenew'              => 'AutoRenew',
        'autoRenewPeriod'        => 'AutoRenewPeriod',
        'chargeType'             => 'ChargeType',
        'clientToken'            => 'ClientToken',
        'cpuOverCommitRatio'     => 'CpuOverCommitRatio',
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'dedicatedHostName'      => 'DedicatedHostName',
        'dedicatedHostType'      => 'DedicatedHostType',
        'description'            => 'Description',
        'minQuantity'            => 'MinQuantity',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'period'                 => 'Period',
        'periodUnit'             => 'PeriodUnit',
        'quantity'               => 'Quantity',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'tag'                    => 'Tag',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }
        if (null !== $this->autoPlacement) {
            $res['AutoPlacement'] = $this->autoPlacement;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cpuOverCommitRatio) {
            $res['CpuOverCommitRatio'] = $this->cpuOverCommitRatio;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->minQuantity) {
            $res['MinQuantity'] = $this->minQuantity;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateDedicatedHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }
        if (isset($map['AutoPlacement'])) {
            $model->autoPlacement = $map['AutoPlacement'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CpuOverCommitRatio'])) {
            $model->cpuOverCommitRatio = $map['CpuOverCommitRatio'];
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MinQuantity'])) {
            $model->minQuantity = $map['MinQuantity'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
