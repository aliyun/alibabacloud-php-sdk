<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateInspectionTaskRequest\DBClusterList;

class CreateInspectionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var DBClusterList[]
     */
    public $DBClusterList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $taskDescription;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'DBClusterList' => 'DBClusterList',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'spaceId' => 'SpaceId',
        'taskDescription' => 'TaskDescription',
    ];

    public function validate()
    {
        if (\is_array($this->DBClusterList)) {
            Model::validateArray($this->DBClusterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->DBClusterList) {
            if (\is_array($this->DBClusterList)) {
                $res['DBClusterList'] = [];
                $n1 = 0;
                foreach ($this->DBClusterList as $item1) {
                    $res['DBClusterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->taskDescription) {
            $res['TaskDescription'] = $this->taskDescription;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['DBClusterList'])) {
            if (!empty($map['DBClusterList'])) {
                $model->DBClusterList = [];
                $n1 = 0;
                foreach ($map['DBClusterList'] as $item1) {
                    $model->DBClusterList[$n1] = DBClusterList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['TaskDescription'])) {
            $model->taskDescription = $map['TaskDescription'];
        }

        return $model;
    }
}
