<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeGroupsResponseBody\groups\instances;

class groups extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var float
     */
    public $lastWeekUsedCoreTime;

    /**
     * @var float
     */
    public $leftCoreTime;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $totalTimeDecimal;

    /**
     * @var float
     */
    public $usedCoreTime;

    /**
     * @var string
     */
    public $usedTimeDecimal;
    protected $_name = [
        'groupId' => 'GroupId',
        'instanceCount' => 'InstanceCount',
        'instances' => 'Instances',
        'lastWeekUsedCoreTime' => 'LastWeekUsedCoreTime',
        'leftCoreTime' => 'LeftCoreTime',
        'resourceIds' => 'ResourceIds',
        'totalTimeDecimal' => 'TotalTimeDecimal',
        'usedCoreTime' => 'UsedCoreTime',
        'usedTimeDecimal' => 'UsedTimeDecimal',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastWeekUsedCoreTime) {
            $res['LastWeekUsedCoreTime'] = $this->lastWeekUsedCoreTime;
        }

        if (null !== $this->leftCoreTime) {
            $res['LeftCoreTime'] = $this->leftCoreTime;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalTimeDecimal) {
            $res['TotalTimeDecimal'] = $this->totalTimeDecimal;
        }

        if (null !== $this->usedCoreTime) {
            $res['UsedCoreTime'] = $this->usedCoreTime;
        }

        if (null !== $this->usedTimeDecimal) {
            $res['UsedTimeDecimal'] = $this->usedTimeDecimal;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1] = instances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LastWeekUsedCoreTime'])) {
            $model->lastWeekUsedCoreTime = $map['LastWeekUsedCoreTime'];
        }

        if (isset($map['LeftCoreTime'])) {
            $model->leftCoreTime = $map['LeftCoreTime'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalTimeDecimal'])) {
            $model->totalTimeDecimal = $map['TotalTimeDecimal'];
        }

        if (isset($map['UsedCoreTime'])) {
            $model->usedCoreTime = $map['UsedCoreTime'];
        }

        if (isset($map['UsedTimeDecimal'])) {
            $model->usedTimeDecimal = $map['UsedTimeDecimal'];
        }

        return $model;
    }
}
