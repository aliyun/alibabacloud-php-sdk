<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponseBody;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponseBody\executors\resource;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponseBody\executors\tags;
use AlibabaCloud\Tea\Model;

class executors extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $arrayIndex;

    /**
     * @example 2024-02-20 10:04:10
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-02-20 10:04:18
     *
     * @var string
     */
    public $endTime;

    /**
     * @example job-xxxx-task0-1
     *
     * @var string
     */
    public $executorId;

    /**
     * @var string[]
     */
    public $externalIpAddress;

    /**
     * @var string[]
     */
    public $hostName;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string[]
     */
    public $ipAddress;

    /**
     * @example job-hy1nggvyukuvkr******
     *
     * @var string
     */
    public $jobId;

    /**
     * @example testJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Succeeded to release executor resource
     *
     * @var string
     */
    public $statusReason;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example task0
     *
     * @var string
     */
    public $taskName;

    /**
     * @var bool
     */
    public $taskSustainable;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'arrayIndex'        => 'ArrayIndex',
        'createTime'        => 'CreateTime',
        'endTime'           => 'EndTime',
        'executorId'        => 'ExecutorId',
        'externalIpAddress' => 'ExternalIpAddress',
        'hostName'          => 'HostName',
        'image'             => 'Image',
        'ipAddress'         => 'IpAddress',
        'jobId'             => 'JobId',
        'jobName'           => 'JobName',
        'resource'          => 'Resource',
        'resourceType'      => 'ResourceType',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'statusReason'      => 'StatusReason',
        'tags'              => 'Tags',
        'taskName'          => 'TaskName',
        'taskSustainable'   => 'TaskSustainable',
        'vswitchId'         => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->externalIpAddress) {
            $res['ExternalIpAddress'] = $this->externalIpAddress;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskSustainable) {
            $res['TaskSustainable'] = $this->taskSustainable;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayIndex'])) {
            $model->arrayIndex = $map['ArrayIndex'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['ExternalIpAddress'])) {
            if (!empty($map['ExternalIpAddress'])) {
                $model->externalIpAddress = $map['ExternalIpAddress'];
            }
        }
        if (isset($map['HostName'])) {
            if (!empty($map['HostName'])) {
                $model->hostName = $map['HostName'];
            }
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = $map['IpAddress'];
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskSustainable'])) {
            $model->taskSustainable = $map['TaskSustainable'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
