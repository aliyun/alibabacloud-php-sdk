<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetKillInstanceSessionTaskResultRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     * >  You must specify this parameter if your database instance is a PolarDB for MySQL cluster.
     * @example pi-8vbkfj5a756um****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The task ID. You can obtain the task ID from the response parameters of the [CreateKillInstanceSessionTask](https://help.aliyun.com/document_detail/609246.html) operation.
     *
     * This parameter is required.
     * @example f77d535b45405bd462b21caa3ee8****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKillInstanceSessionTaskResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
