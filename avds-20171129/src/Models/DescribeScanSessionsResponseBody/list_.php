<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeScanSessionsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var int
     */
    public $finishedAt;

    /**
     * @var string[]
     */
    public $targets;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $scanId;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $reportUrl;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var float
     */
    public $runPercent;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'reportStatus' => 'ReportStatus',
        'finishedAt'   => 'FinishedAt',
        'targets'      => 'Targets',
        'createdAt'    => 'CreatedAt',
        'scanId'       => 'ScanId',
        'period'       => 'Period',
        'triggerType'  => 'TriggerType',
        'reportUrl'    => 'ReportUrl',
        'jobStatus'    => 'JobStatus',
        'runPercent'   => 'RunPercent',
        'interval'     => 'Interval',
        'name'         => 'Name',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->scanId) {
            $res['ScanId'] = $this->scanId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->runPercent) {
            $res['RunPercent'] = $this->runPercent;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = $map['Targets'];
            }
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['ScanId'])) {
            $model->scanId = $map['ScanId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['RunPercent'])) {
            $model->runPercent = $map['RunPercent'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
