<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponseBody\data\aiSummary;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponseBody\data\notification;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponseBody\data\summary;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponseBody\data\timeRange;

class data extends Model
{
    /**
     * @var aiSummary
     */
    public $aiSummary;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var notification
     */
    public $notification;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportFinishedAt;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var string
     */
    public $requestedAt;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var summary
     */
    public $summary;

    /**
     * @var timeRange
     */
    public $timeRange;

    /**
     * @var string
     */
    public $triggerSource;
    protected $_name = [
        'aiSummary' => 'aiSummary',
        'finishedAt' => 'finishedAt',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'notification' => 'notification',
        'regionId' => 'regionId',
        'reportFinishedAt' => 'reportFinishedAt',
        'reportId' => 'reportId',
        'reportStatus' => 'reportStatus',
        'requestedAt' => 'requestedAt',
        'runId' => 'runId',
        'status' => 'status',
        'summary' => 'summary',
        'timeRange' => 'timeRange',
        'triggerSource' => 'triggerSource',
    ];

    public function validate()
    {
        if (null !== $this->aiSummary) {
            $this->aiSummary->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiSummary) {
            $res['aiSummary'] = null !== $this->aiSummary ? $this->aiSummary->toArray($noStream) : $this->aiSummary;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->notification) {
            $res['notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->reportFinishedAt) {
            $res['reportFinishedAt'] = $this->reportFinishedAt;
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->reportStatus) {
            $res['reportStatus'] = $this->reportStatus;
        }

        if (null !== $this->requestedAt) {
            $res['requestedAt'] = $this->requestedAt;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
        }

        if (null !== $this->triggerSource) {
            $res['triggerSource'] = $this->triggerSource;
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
        if (isset($map['aiSummary'])) {
            $model->aiSummary = aiSummary::fromMap($map['aiSummary']);
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['notification'])) {
            $model->notification = notification::fromMap($map['notification']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['reportFinishedAt'])) {
            $model->reportFinishedAt = $map['reportFinishedAt'];
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['reportStatus'])) {
            $model->reportStatus = $map['reportStatus'];
        }

        if (isset($map['requestedAt'])) {
            $model->requestedAt = $map['requestedAt'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['summary'])) {
            $model->summary = summary::fromMap($map['summary']);
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = timeRange::fromMap($map['timeRange']);
        }

        if (isset($map['triggerSource'])) {
            $model->triggerSource = $map['triggerSource'];
        }

        return $model;
    }
}
