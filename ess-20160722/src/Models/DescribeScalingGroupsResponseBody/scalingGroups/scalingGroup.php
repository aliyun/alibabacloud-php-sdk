<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups\scalingGroup\DBInstanceIds;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups\scalingGroup\loadBalancerIds;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups\scalingGroup\removalPolicies;
use AlibabaCloud\Tea\Model;

class scalingGroup extends Model
{
    /**
     * @var int
     */
    public $activeCapacity;

    /**
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var DBInstanceIds
     */
    public $DBInstanceIds;

    /**
     * @var int
     */
    public $defaultCooldown;

    /**
     * @var string
     */
    public $lifecycleState;

    /**
     * @var loadBalancerIds
     */
    public $loadBalancerIds;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $pendingCapacity;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var removalPolicies
     */
    public $removalPolicies;

    /**
     * @var int
     */
    public $removingCapacity;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $scalingGroupName;

    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'activeCapacity'               => 'ActiveCapacity',
        'activeScalingConfigurationId' => 'ActiveScalingConfigurationId',
        'creationTime'                 => 'CreationTime',
        'DBInstanceIds'                => 'DBInstanceIds',
        'defaultCooldown'              => 'DefaultCooldown',
        'lifecycleState'               => 'LifecycleState',
        'loadBalancerIds'              => 'LoadBalancerIds',
        'maxSize'                      => 'MaxSize',
        'minSize'                      => 'MinSize',
        'pendingCapacity'              => 'PendingCapacity',
        'regionId'                     => 'RegionId',
        'removalPolicies'              => 'RemovalPolicies',
        'removingCapacity'             => 'RemovingCapacity',
        'scalingGroupId'               => 'ScalingGroupId',
        'scalingGroupName'             => 'ScalingGroupName',
        'totalCapacity'                => 'TotalCapacity',
        'vSwitchId'                    => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCapacity) {
            $res['ActiveCapacity'] = $this->activeCapacity;
        }
        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = null !== $this->DBInstanceIds ? $this->DBInstanceIds->toMap() : null;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = null !== $this->loadBalancerIds ? $this->loadBalancerIds->toMap() : null;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->pendingCapacity) {
            $res['PendingCapacity'] = $this->pendingCapacity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removalPolicies) {
            $res['RemovalPolicies'] = null !== $this->removalPolicies ? $this->removalPolicies->toMap() : null;
        }
        if (null !== $this->removingCapacity) {
            $res['RemovingCapacity'] = $this->removingCapacity;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingGroupName) {
            $res['ScalingGroupName'] = $this->scalingGroupName;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCapacity'])) {
            $model->activeCapacity = $map['ActiveCapacity'];
        }
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = DBInstanceIds::fromMap($map['DBInstanceIds']);
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
        }
        if (isset($map['LoadBalancerIds'])) {
            $model->loadBalancerIds = loadBalancerIds::fromMap($map['LoadBalancerIds']);
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['PendingCapacity'])) {
            $model->pendingCapacity = $map['PendingCapacity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemovalPolicies'])) {
            $model->removalPolicies = removalPolicies::fromMap($map['RemovalPolicies']);
        }
        if (isset($map['RemovingCapacity'])) {
            $model->removingCapacity = $map['RemovingCapacity'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingGroupName'])) {
            $model->scalingGroupName = $map['ScalingGroupName'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
