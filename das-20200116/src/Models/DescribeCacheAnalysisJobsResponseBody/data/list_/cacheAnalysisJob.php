<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data\list_;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data\list_\cacheAnalysisJob\bigKeys;
use AlibabaCloud\Tea\Model;

class cacheAnalysisJob extends Model
{
    /**
     * @description The details about the large keys.
     *
     * > The sub-parameters of this parameter and the content of the sub-parameters are not returned. To query the detailed information about the cache analysis tasks, call the [DescribeCacheAnalysisJob](~~443012~~) operation.
     * @var bigKeys
     */
    public $bigKeys;

    /**
     * @description The instance ID.
     *
     * @example r-bp18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the cache analysis task.
     *
     * @example sf79-sd99-sa37-****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The returned message.
     *
     * >  If the request was successful, **Successful** is returned. If the request failed, an error message such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the data node on the instance.
     *
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The state of the cache analysis task. Valid values:
     *
     * **BACKUP**: The data is being backed up.
     * **ANALYZING**: The data is being analyzed.
     * **FINISHED**: The data is analyzed.
     * **FAILED**: An error occurred.
     *
     * @example BACKUP
     *
     * @var string
     */
    public $taskState;
    protected $_name = [
        'bigKeys'    => 'BigKeys',
        'instanceId' => 'InstanceId',
        'jobId'      => 'JobId',
        'message'    => 'Message',
        'nodeId'     => 'NodeId',
        'taskState'  => 'TaskState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bigKeys) {
            $res['BigKeys'] = null !== $this->bigKeys ? $this->bigKeys->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cacheAnalysisJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BigKeys'])) {
            $model->bigKeys = bigKeys::fromMap($map['BigKeys']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }

        return $model;
    }
}
