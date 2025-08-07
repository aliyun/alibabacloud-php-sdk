<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponseBody\executors\resource;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponseBody\executors\tags;

class executors extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $arrayIndex;

    /**
     * @var int
     */
    public $blockDuration;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $expirationTime;

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
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var bool
     */
    public $preemptible;

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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var tags[]
     */
    public $tags;

    /**
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
        'appName' => 'AppName',
        'arrayIndex' => 'ArrayIndex',
        'blockDuration' => 'BlockDuration',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'executorId' => 'ExecutorId',
        'expirationTime' => 'ExpirationTime',
        'externalIpAddress' => 'ExternalIpAddress',
        'hostName' => 'HostName',
        'image' => 'Image',
        'ipAddress' => 'IpAddress',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'preemptible' => 'Preemptible',
        'resource' => 'Resource',
        'resourceType' => 'ResourceType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
        'tags' => 'Tags',
        'taskName' => 'TaskName',
        'taskSustainable' => 'TaskSustainable',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        if (\is_array($this->externalIpAddress)) {
            Model::validateArray($this->externalIpAddress);
        }
        if (\is_array($this->hostName)) {
            Model::validateArray($this->hostName);
        }
        if (\is_array($this->ipAddress)) {
            Model::validateArray($this->ipAddress);
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }

        if (null !== $this->blockDuration) {
            $res['BlockDuration'] = $this->blockDuration;
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

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->externalIpAddress) {
            if (\is_array($this->externalIpAddress)) {
                $res['ExternalIpAddress'] = [];
                $n1 = 0;
                foreach ($this->externalIpAddress as $item1) {
                    $res['ExternalIpAddress'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostName) {
            if (\is_array($this->hostName)) {
                $res['HostName'] = [];
                $n1 = 0;
                foreach ($this->hostName as $item1) {
                    $res['HostName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->ipAddress) {
            if (\is_array($this->ipAddress)) {
                $res['IpAddress'] = [];
                $n1 = 0;
                foreach ($this->ipAddress as $item1) {
                    $res['IpAddress'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->preemptible) {
            $res['Preemptible'] = $this->preemptible;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ArrayIndex'])) {
            $model->arrayIndex = $map['ArrayIndex'];
        }

        if (isset($map['BlockDuration'])) {
            $model->blockDuration = $map['BlockDuration'];
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

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['ExternalIpAddress'])) {
            if (!empty($map['ExternalIpAddress'])) {
                $model->externalIpAddress = [];
                $n1 = 0;
                foreach ($map['ExternalIpAddress'] as $item1) {
                    $model->externalIpAddress[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HostName'])) {
            if (!empty($map['HostName'])) {
                $model->hostName = [];
                $n1 = 0;
                foreach ($map['HostName'] as $item1) {
                    $model->hostName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = [];
                $n1 = 0;
                foreach ($map['IpAddress'] as $item1) {
                    $model->ipAddress[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Preemptible'])) {
            $model->preemptible = $map['Preemptible'];
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
