<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\crossRegionCopyInfo;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\retainRule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\schedule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\specialRetainRules;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\storageRule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\tags;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description Creation Time.
     *
     * @example 2023-06-24T06:03:35Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Snapshot replication destination information.
     *
     * @var crossRegionCopyInfo
     */
    public $crossRegionCopyInfo;

    /**
     * @description The description of the policy.
     *
     * @example xxx
     *
     * @var string
     */
    public $desc;

    /**
     * @var string[]
     */
    public $diskIds;

    /**
     * @description Indicates whether it is an ECS snapshot policy，The range of values:
     *
     * - false
     * @example false
     *
     * @var bool
     */
    public $managedForEcs;

    /**
     * @description The name of the policy.
     *
     * @example xxx
     *
     * @var string
     */
    public $name;

    /**
     * @description The id of the policy.
     *
     * @example esp-xxx
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The resource group
     *
     * @example rg-xxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The snapshot retention rule.
     *
     * @var retainRule
     */
    public $retainRule;

    /**
     * @description The rule for scheduling.
     *
     * @var schedule
     */
    public $schedule;

    /**
     * @description The special snapshot retention rules.
     *
     * @var specialRetainRules
     */
    public $specialRetainRules;

    /**
     * @description The status of the policy. Valid values:
     *
     * - DISABLED: Disable policy execution.
     * @example DISABLED
     *
     * @var string
     */
    public $state;

    /**
     * @description Advanced snapshot features.
     *
     * @var storageRule
     */
    public $storageRule;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Number of bound targets.
     *
     * @example 10
     *
     * @var int
     */
    public $targetCount;

    /**
     * @description The target type.
     *
     * @example DISK
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'crossRegionCopyInfo' => 'CrossRegionCopyInfo',
        'desc'                => 'Desc',
        'diskIds'             => 'DiskIds',
        'managedForEcs'       => 'ManagedForEcs',
        'name'                => 'Name',
        'policyId'            => 'PolicyId',
        'resourceGroupId'     => 'ResourceGroupId',
        'retainRule'          => 'RetainRule',
        'schedule'            => 'Schedule',
        'specialRetainRules'  => 'SpecialRetainRules',
        'state'               => 'State',
        'storageRule'         => 'StorageRule',
        'tags'                => 'Tags',
        'targetCount'         => 'TargetCount',
        'targetType'          => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossRegionCopyInfo) {
            $res['CrossRegionCopyInfo'] = null !== $this->crossRegionCopyInfo ? $this->crossRegionCopyInfo->toMap() : null;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->managedForEcs) {
            $res['ManagedForEcs'] = $this->managedForEcs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retainRule) {
            $res['RetainRule'] = null !== $this->retainRule ? $this->retainRule->toMap() : null;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }
        if (null !== $this->specialRetainRules) {
            $res['SpecialRetainRules'] = null !== $this->specialRetainRules ? $this->specialRetainRules->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->storageRule) {
            $res['StorageRule'] = null !== $this->storageRule ? $this->storageRule->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetCount) {
            $res['TargetCount'] = $this->targetCount;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossRegionCopyInfo'])) {
            $model->crossRegionCopyInfo = crossRegionCopyInfo::fromMap($map['CrossRegionCopyInfo']);
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = $map['DiskIds'];
            }
        }
        if (isset($map['ManagedForEcs'])) {
            $model->managedForEcs = $map['ManagedForEcs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetainRule'])) {
            $model->retainRule = retainRule::fromMap($map['RetainRule']);
        }
        if (isset($map['Schedule'])) {
            $model->schedule = schedule::fromMap($map['Schedule']);
        }
        if (isset($map['SpecialRetainRules'])) {
            $model->specialRetainRules = specialRetainRules::fromMap($map['SpecialRetainRules']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StorageRule'])) {
            $model->storageRule = storageRule::fromMap($map['StorageRule']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetCount'])) {
            $model->targetCount = $map['TargetCount'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
