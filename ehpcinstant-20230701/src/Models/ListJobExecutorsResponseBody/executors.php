<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponseBody;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponseBody\executors\tags;
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
     * @var string[]
     */
    public $ipAddress;

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
     * @example Creating executor
     *
     * @var string
     */
    public $statusReason;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'arrayIndex' => 'ArrayIndex',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'executorId' => 'ExecutorId',
        'expirationTime' => 'ExpirationTime',
        'externalIpAddress' => 'ExternalIpAddress',
        'hostName' => 'HostName',
        'ipAddress' => 'IpAddress',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
        'tags' => 'Tags',
    ];

    public function validate() {}

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
        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }
        if (null !== $this->externalIpAddress) {
            $res['ExternalIpAddress'] = $this->externalIpAddress;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
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
        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
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
        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = $map['IpAddress'];
            }
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
