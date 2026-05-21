<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QueueMeta extends Model
{
    /**
     * @var string
     */
    public $gmtDequeuedTime;

    /**
     * @var string
     */
    public $gmtEnqueuedTime;

    /**
     * @var string
     */
    public $gmtPositionModifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $queueStrategy;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var ResourceAmount
     */
    public $resource;

    /**
     * @var string
     */
    public $scheduledResource;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $useOversoldResource;
    protected $_name = [
        'gmtDequeuedTime' => 'GmtDequeuedTime',
        'gmtEnqueuedTime' => 'GmtEnqueuedTime',
        'gmtPositionModifiedTime' => 'GmtPositionModifiedTime',
        'name' => 'Name',
        'position' => 'Position',
        'queueStrategy' => 'QueueStrategy',
        'quotaId' => 'QuotaId',
        'resource' => 'Resource',
        'scheduledResource' => 'ScheduledResource',
        'status' => 'Status',
        'useOversoldResource' => 'UseOversoldResource',
    ];

    public function validate()
    {
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtDequeuedTime) {
            $res['GmtDequeuedTime'] = $this->gmtDequeuedTime;
        }

        if (null !== $this->gmtEnqueuedTime) {
            $res['GmtEnqueuedTime'] = $this->gmtEnqueuedTime;
        }

        if (null !== $this->gmtPositionModifiedTime) {
            $res['GmtPositionModifiedTime'] = $this->gmtPositionModifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->scheduledResource) {
            $res['ScheduledResource'] = $this->scheduledResource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->useOversoldResource) {
            $res['UseOversoldResource'] = $this->useOversoldResource;
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
        if (isset($map['GmtDequeuedTime'])) {
            $model->gmtDequeuedTime = $map['GmtDequeuedTime'];
        }

        if (isset($map['GmtEnqueuedTime'])) {
            $model->gmtEnqueuedTime = $map['GmtEnqueuedTime'];
        }

        if (isset($map['GmtPositionModifiedTime'])) {
            $model->gmtPositionModifiedTime = $map['GmtPositionModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['QueueStrategy'])) {
            $model->queueStrategy = $map['QueueStrategy'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = ResourceAmount::fromMap($map['Resource']);
        }

        if (isset($map['ScheduledResource'])) {
            $model->scheduledResource = $map['ScheduledResource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UseOversoldResource'])) {
            $model->useOversoldResource = $map['UseOversoldResource'];
        }

        return $model;
    }
}
