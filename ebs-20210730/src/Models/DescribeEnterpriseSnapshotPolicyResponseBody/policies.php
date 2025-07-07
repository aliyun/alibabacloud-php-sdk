<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\crossRegionCopyInfo;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\retainRule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\schedule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\specialRetainRules;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\storageRule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\tags;

class policies extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var crossRegionCopyInfo
     */
    public $crossRegionCopyInfo;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string[]
     */
    public $diskIds;

    /**
     * @var bool
     */
    public $managedForEcs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var retainRule
     */
    public $retainRule;

    /**
     * @var schedule
     */
    public $schedule;

    /**
     * @var specialRetainRules
     */
    public $specialRetainRules;

    /**
     * @var string
     */
    public $state;

    /**
     * @var storageRule
     */
    public $storageRule;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $targetCount;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'crossRegionCopyInfo' => 'CrossRegionCopyInfo',
        'desc' => 'Desc',
        'diskIds' => 'DiskIds',
        'managedForEcs' => 'ManagedForEcs',
        'name' => 'Name',
        'policyId' => 'PolicyId',
        'resourceGroupId' => 'ResourceGroupId',
        'retainRule' => 'RetainRule',
        'schedule' => 'Schedule',
        'specialRetainRules' => 'SpecialRetainRules',
        'state' => 'State',
        'storageRule' => 'StorageRule',
        'tags' => 'Tags',
        'targetCount' => 'TargetCount',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (null !== $this->crossRegionCopyInfo) {
            $this->crossRegionCopyInfo->validate();
        }
        if (\is_array($this->diskIds)) {
            Model::validateArray($this->diskIds);
        }
        if (null !== $this->retainRule) {
            $this->retainRule->validate();
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        if (null !== $this->specialRetainRules) {
            $this->specialRetainRules->validate();
        }
        if (null !== $this->storageRule) {
            $this->storageRule->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crossRegionCopyInfo) {
            $res['CrossRegionCopyInfo'] = null !== $this->crossRegionCopyInfo ? $this->crossRegionCopyInfo->toArray($noStream) : $this->crossRegionCopyInfo;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->diskIds) {
            if (\is_array($this->diskIds)) {
                $res['DiskIds'] = [];
                $n1 = 0;
                foreach ($this->diskIds as $item1) {
                    $res['DiskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $res['RetainRule'] = null !== $this->retainRule ? $this->retainRule->toArray($noStream) : $this->retainRule;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
        }

        if (null !== $this->specialRetainRules) {
            $res['SpecialRetainRules'] = null !== $this->specialRetainRules ? $this->specialRetainRules->toArray($noStream) : $this->specialRetainRules;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->storageRule) {
            $res['StorageRule'] = null !== $this->storageRule ? $this->storageRule->toArray($noStream) : $this->storageRule;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->diskIds = [];
                $n1 = 0;
                foreach ($map['DiskIds'] as $item1) {
                    $model->diskIds[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
