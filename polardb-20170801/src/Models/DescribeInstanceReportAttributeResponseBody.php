<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeInstanceReportAttributeResponseBody\reportSubItems;

class DescribeInstanceReportAttributeResponseBody extends Model
{
    /**
     * @var bool
     */
    public $latest;

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
     * @var reportSubItems[]
     */
    public $reportSubItems;

    /**
     * @var string
     */
    public $reportSummary;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'latest' => 'Latest',
        'reportDescription' => 'ReportDescription',
        'reportId' => 'ReportId',
        'reportScore' => 'ReportScore',
        'reportStatus' => 'ReportStatus',
        'reportSubItems' => 'ReportSubItems',
        'reportSummary' => 'ReportSummary',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->reportSubItems)) {
            Model::validateArray($this->reportSubItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
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

        if (null !== $this->reportSubItems) {
            if (\is_array($this->reportSubItems)) {
                $res['ReportSubItems'] = [];
                $n1 = 0;
                foreach ($this->reportSubItems as $item1) {
                    $res['ReportSubItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportSummary) {
            $res['ReportSummary'] = $this->reportSummary;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
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

        if (isset($map['ReportSubItems'])) {
            if (!empty($map['ReportSubItems'])) {
                $model->reportSubItems = [];
                $n1 = 0;
                foreach ($map['ReportSubItems'] as $item1) {
                    $model->reportSubItems[$n1] = reportSubItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReportSummary'])) {
            $model->reportSummary = $map['ReportSummary'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
