<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiagnoseReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiagnoseReportResponseBody\reports\events;

class reports extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var int
     */
    public $diagnoseEndTime;

    /**
     * @var int
     */
    public $diagnoseStartTime;

    /**
     * @var string
     */
    public $diagnoseType;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var int
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid' => 'AliUid',
        'creationTime' => 'CreationTime',
        'diagnoseEndTime' => 'DiagnoseEndTime',
        'diagnoseStartTime' => 'DiagnoseStartTime',
        'diagnoseType' => 'DiagnoseType',
        'events' => 'Events',
        'finishedTime' => 'FinishedTime',
        'regionId' => 'RegionId',
        'reportId' => 'ReportId',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'severity' => 'Severity',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->diagnoseEndTime) {
            $res['DiagnoseEndTime'] = $this->diagnoseEndTime;
        }

        if (null !== $this->diagnoseStartTime) {
            $res['DiagnoseStartTime'] = $this->diagnoseStartTime;
        }

        if (null !== $this->diagnoseType) {
            $res['DiagnoseType'] = $this->diagnoseType;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['Events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['Events'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DiagnoseEndTime'])) {
            $model->diagnoseEndTime = $map['DiagnoseEndTime'];
        }

        if (isset($map['DiagnoseStartTime'])) {
            $model->diagnoseStartTime = $map['DiagnoseStartTime'];
        }

        if (isset($map['DiagnoseType'])) {
            $model->diagnoseType = $map['DiagnoseType'];
        }

        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['Events'] as $item1) {
                    $model->events[$n1] = events::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
