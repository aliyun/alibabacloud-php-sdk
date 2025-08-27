<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody\steps;

class DescribeTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @var string
     */
    public $taskState;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'createTime' => 'CreateTime',
        'message' => 'Message',
        'nodeIds' => 'NodeIds',
        'requestId' => 'RequestId',
        'steps' => 'Steps',
        'taskState' => 'TaskState',
        'taskType' => 'TaskType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1] = steps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
