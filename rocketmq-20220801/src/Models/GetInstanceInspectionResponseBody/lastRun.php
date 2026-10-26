<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\aiSummary;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\configSnapshot;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\items;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\notification;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\report;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\summary;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\timeRange;

class lastRun extends Model
{
    /**
     * @var aiSummary
     */
    public $aiSummary;

    /**
     * @var configSnapshot
     */
    public $configSnapshot;

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
     * @var items[]
     */
    public $items;

    /**
     * @var notification
     */
    public $notification;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var report
     */
    public $report;

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
        'configSnapshot' => 'configSnapshot',
        'finishedAt' => 'finishedAt',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'items' => 'items',
        'notification' => 'notification',
        'regionId' => 'regionId',
        'report' => 'report',
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
        if (null !== $this->configSnapshot) {
            $this->configSnapshot->validate();
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (null !== $this->report) {
            $this->report->validate();
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

        if (null !== $this->configSnapshot) {
            $res['configSnapshot'] = null !== $this->configSnapshot ? $this->configSnapshot->toArray($noStream) : $this->configSnapshot;
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

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notification) {
            $res['notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->report) {
            $res['report'] = null !== $this->report ? $this->report->toArray($noStream) : $this->report;
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

        if (isset($map['configSnapshot'])) {
            $model->configSnapshot = configSnapshot::fromMap($map['configSnapshot']);
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

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['notification'])) {
            $model->notification = notification::fromMap($map['notification']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['report'])) {
            $model->report = report::fromMap($map['report']);
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
