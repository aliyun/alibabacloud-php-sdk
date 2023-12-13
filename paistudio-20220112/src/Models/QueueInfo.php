<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class QueueInfo extends Model
{
    /**
     * @example “2023-06-22T00:00:00Z”
     *
     * @var string
     */
    public $gmtEnqueuedTime;

    /**
     * @example "2023-06-22T00:00:00Z"
     *
     * @var string
     */
    public $gmtPositionModifiedTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $position;

    /**
     * @example 2
     *
     * @var int
     */
    public $priority;

    /**
     * @example PaiStrategyIntelligent
     *
     * @var string
     */
    public $queueStrategy;

    /**
     * @example “quotamtl37ge7gkvdz”
     *
     * @var string
     */
    public $quotaId;

    /**
     * @example dlcxxxx
     *
     * @var string
     */
    public $workloadId;

    /**
     * @example dlc
     *
     * @var string
     */
    public $workloadType;

    /**
     * @example “432524”
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'gmtEnqueuedTime'         => 'GmtEnqueuedTime',
        'gmtPositionModifiedTime' => 'GmtPositionModifiedTime',
        'position'                => 'Position',
        'priority'                => 'Priority',
        'queueStrategy'           => 'QueueStrategy',
        'quotaId'                 => 'QuotaId',
        'workloadId'              => 'WorkloadId',
        'workloadType'            => 'WorkloadType',
        'workspaceId'             => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtEnqueuedTime) {
            $res['GmtEnqueuedTime'] = $this->gmtEnqueuedTime;
        }
        if (null !== $this->gmtPositionModifiedTime) {
            $res['GmtPositionModifiedTime'] = $this->gmtPositionModifiedTime;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueueInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtEnqueuedTime'])) {
            $model->gmtEnqueuedTime = $map['GmtEnqueuedTime'];
        }
        if (isset($map['GmtPositionModifiedTime'])) {
            $model->gmtPositionModifiedTime = $map['GmtPositionModifiedTime'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['QueueStrategy'])) {
            $model->queueStrategy = $map['QueueStrategy'];
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
