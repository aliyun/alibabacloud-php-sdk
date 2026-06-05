<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class ListEdgeWorkersRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $hiveIds;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $planIds;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'endTime' => 'EndTime',
        'hiveIds' => 'HiveIds',
        'instanceIds' => 'InstanceIds',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'planIds' => 'PlanIds',
        'spec' => 'Spec',
        'startTime' => 'StartTime',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->hiveIds)) {
            Model::validateArray($this->hiveIds);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->planIds)) {
            Model::validateArray($this->planIds);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->hiveIds) {
            if (\is_array($this->hiveIds)) {
                $res['HiveIds'] = [];
                $n1 = 0;
                foreach ($this->hiveIds as $item1) {
                    $res['HiveIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->planIds) {
            if (\is_array($this->planIds)) {
                $res['PlanIds'] = [];
                $n1 = 0;
                foreach ($this->planIds as $item1) {
                    $res['PlanIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['HiveIds'])) {
            if (!empty($map['HiveIds'])) {
                $model->hiveIds = [];
                $n1 = 0;
                foreach ($map['HiveIds'] as $item1) {
                    $model->hiveIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PlanIds'])) {
            if (!empty($map['PlanIds'])) {
                $model->planIds = [];
                $n1 = 0;
                foreach ($map['PlanIds'] as $item1) {
                    $model->planIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
