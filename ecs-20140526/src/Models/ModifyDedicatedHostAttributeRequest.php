<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAttributeRequest\networkAttributes;
use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostAttributeRequest extends Model
{
    /**
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @description The policy for migrating the instances deployed on the dedicated host when the dedicated host fails or needs to be repaired online. Valid values:
     *
     *   Migrate: The instances are migrated to another physical machine and then restarted.
     *   Stop: The instances are stopped. If the dedicated host cannot be repaired, the instances are migrated to another physical machine and then restarted.
     *
     * If the dedicated host has local disks attached, the default value is Stop.
     * @example Migrate
     *
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @description Specifies whether to add the dedicated host to the resource pool for automatic deployment. If you do not specify **DedicatedHostId** when you create an instance on a dedicated host, Alibaba Cloud automatically selects a dedicated host from the resource pool to host the instance. Valid values:
     *
     *   on: adds the dedicated host to the resource pool for automatic deployment.
     *   off: does not add the dedicated host to the resource pool for automatic deployment.
     *
     * For information about automatic deployment, see [Functions and features](https://help.aliyun.com/document_detail/118938.html).
     * @example on
     *
     * @var string
     */
    public $autoPlacement;

    /**
     * @description The CPU overcommit ratio. You can configure CPU overcommit ratios only for the following dedicated host types: g6s, c6s, and r6s. Valid values: 1 to 5.
     *
     * The CPU overcommit ratio affects the number of available vCPUs on a dedicated host. You can use the following formula to calculate the number of available vCPUs on a dedicated host: Number of available vCPUs = Number of physical CPU cores × 2 × CPU overcommit ratio. For example, the number of physical CPU cores on each g6s dedicated host is 52. If you change the CPU overcommit ratio of a g6s dedicated host to 4, the number of available vCPUs on the dedicated host is 416. For scenarios that have minimal requirements for CPU stability or where CPU load is not heavy, such as development and test environments, you can increase the number of available vCPUs on a dedicated host by increasing the CPU overcommit ratio. This allows you to deploy more ECS instances of the same specifications on the dedicated host and reduce the unit deployment cost.
     * @example 1
     *
     * @var float
     */
    public $cpuOverCommitRatio;

    /**
     * @description The ID of the dedicated host cluster to which to assign the dedicated host.
     *
     * @example dc-bp165p6xk2tlw61e****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The ID of the dedicated host.
     *
     * This parameter is required.
     * @example dh-bp165p6xk2tlw61e****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The name of the dedicated host. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with http:// or https://. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example testDedicatedHostName
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The description of the dedicated host. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the dedicated host resides. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
        'networkAttributes'      => 'NetworkAttributes',
        'actionOnMaintenance'    => 'ActionOnMaintenance',
        'autoPlacement'          => 'AutoPlacement',
        'cpuOverCommitRatio'     => 'CpuOverCommitRatio',
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'dedicatedHostId'        => 'DedicatedHostId',
        'dedicatedHostName'      => 'DedicatedHostName',
        'description'            => 'Description',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
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
        if (null !== $this->cpuOverCommitRatio) {
            $res['CpuOverCommitRatio'] = $this->cpuOverCommitRatio;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return ModifyDedicatedHostAttributeRequest
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
        if (isset($map['CpuOverCommitRatio'])) {
            $model->cpuOverCommitRatio = $map['CpuOverCommitRatio'];
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
