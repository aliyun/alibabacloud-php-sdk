<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody\steps;
use AlibabaCloud\Tea\Model;

class DescribeTaskResponseBody extends Model
{
    /**
     * @example i119982311660892626523
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Standard_Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 2022-11-30T02:00:00.852Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]
     *
     * @var string
     */
    public $message;

    /**
     * @example A7FD7411-9395-52E8-AF42-EB3A4A55446D
     *
     * @var string
     */
    public $requestId;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @example running
     *
     * @var string
     */
    public $taskState;

    /**
     * @example cut_cluster
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 2022-11-30T03:40:14.852Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'createTime'  => 'CreateTime',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'steps'       => 'Steps',
        'taskState'   => 'TaskState',
        'taskType'    => 'TaskType',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->steps) {
            $res['Steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['Steps'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeTaskResponseBody
     */
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n            = 0;
                foreach ($map['Steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
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
