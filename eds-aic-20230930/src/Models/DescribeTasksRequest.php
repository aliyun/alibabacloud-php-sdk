<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeTasksRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $param;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string[]
     */
    public $taskStatuses;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'invokeId' => 'InvokeId',
        'level' => 'Level',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'param' => 'Param',
        'parentTaskId' => 'ParentTaskId',
        'resourceIds' => 'ResourceIds',
        'taskIds' => 'TaskIds',
        'taskStatus' => 'TaskStatus',
        'taskStatuses' => 'TaskStatuses',
        'taskType' => 'TaskType',
        'taskTypes' => 'TaskTypes',
    ];

    public function validate()
    {
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        if (\is_array($this->taskStatuses)) {
            Model::validateArray($this->taskStatuses);
        }
        if (\is_array($this->taskTypes)) {
            Model::validateArray($this->taskTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskStatuses) {
            if (\is_array($this->taskStatuses)) {
                $res['TaskStatuses'] = [];
                $n1 = 0;
                foreach ($this->taskStatuses as $item1) {
                    $res['TaskStatuses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->taskTypes) {
            if (\is_array($this->taskTypes)) {
                $res['TaskTypes'] = [];
                $n1 = 0;
                foreach ($this->taskTypes as $item1) {
                    $res['TaskTypes'][$n1++] = $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskStatuses'])) {
            if (!empty($map['TaskStatuses'])) {
                $model->taskStatuses = [];
                $n1 = 0;
                foreach ($map['TaskStatuses'] as $item1) {
                    $model->taskStatuses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = [];
                $n1 = 0;
                foreach ($map['TaskTypes'] as $item1) {
                    $model->taskTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
