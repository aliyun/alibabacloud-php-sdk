<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeInspectionReportListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeInspectionReportListResponseBody\reportItems\subItems;

class reportItems extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $latest;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportDescription;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var int
     */
    public $reportScore;

    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var string
     */
    public $reportSummary;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var subItems[]
     */
    public $subItems;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'latest' => 'Latest',
        'regionId' => 'RegionId',
        'reportDescription' => 'ReportDescription',
        'reportId' => 'ReportId',
        'reportScore' => 'ReportScore',
        'reportStatus' => 'ReportStatus',
        'reportSummary' => 'ReportSummary',
        'reportTime' => 'ReportTime',
        'subItems' => 'SubItems',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->subItems)) {
            Model::validateArray($this->subItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportDescription) {
            $res['ReportDescription'] = $this->reportDescription;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->reportScore) {
            $res['ReportScore'] = $this->reportScore;
        }

        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }

        if (null !== $this->reportSummary) {
            $res['ReportSummary'] = $this->reportSummary;
        }

        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }

        if (null !== $this->subItems) {
            if (\is_array($this->subItems)) {
                $res['SubItems'] = [];
                $n1 = 0;
                foreach ($this->subItems as $item1) {
                    $res['SubItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportDescription'])) {
            $model->reportDescription = $map['ReportDescription'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ReportScore'])) {
            $model->reportScore = $map['ReportScore'];
        }

        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }

        if (isset($map['ReportSummary'])) {
            $model->reportSummary = $map['ReportSummary'];
        }

        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }

        if (isset($map['SubItems'])) {
            if (!empty($map['SubItems'])) {
                $model->subItems = [];
                $n1 = 0;
                foreach ($map['SubItems'] as $item1) {
                    $model->subItems[$n1] = subItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
