<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RerunWorkflowInstancesRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var bool
     */
    public $rerunDownstreamEnabled;

    /**
     * @var int[]
     */
    public $taskIds;

    /**
     * @var string[]
     */
    public $taskInstanceStatuses;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'rerunDownstreamEnabled' => 'RerunDownstreamEnabled',
        'taskIds' => 'TaskIds',
        'taskInstanceStatuses' => 'TaskInstanceStatuses',
        'taskName' => 'TaskName',
        'taskTypes' => 'TaskTypes',
    ];

    public function validate()
    {
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        if (\is_array($this->taskInstanceStatuses)) {
            Model::validateArray($this->taskInstanceStatuses);
        }
        if (\is_array($this->taskTypes)) {
            Model::validateArray($this->taskTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rerunDownstreamEnabled) {
            $res['RerunDownstreamEnabled'] = $this->rerunDownstreamEnabled;
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskInstanceStatuses) {
            if (\is_array($this->taskInstanceStatuses)) {
                $res['TaskInstanceStatuses'] = [];
                $n1 = 0;
                foreach ($this->taskInstanceStatuses as $item1) {
                    $res['TaskInstanceStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskTypes) {
            if (\is_array($this->taskTypes)) {
                $res['TaskTypes'] = [];
                $n1 = 0;
                foreach ($this->taskTypes as $item1) {
                    $res['TaskTypes'][$n1] = $item1;
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
        if (isset($map['RerunDownstreamEnabled'])) {
            $model->rerunDownstreamEnabled = $map['RerunDownstreamEnabled'];
        }

        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskInstanceStatuses'])) {
            if (!empty($map['TaskInstanceStatuses'])) {
                $model->taskInstanceStatuses = [];
                $n1 = 0;
                foreach ($map['TaskInstanceStatuses'] as $item1) {
                    $model->taskInstanceStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = [];
                $n1 = 0;
                foreach ($map['TaskTypes'] as $item1) {
                    $model->taskTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
