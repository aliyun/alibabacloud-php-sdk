<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterReportDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class reportOverView extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $agentCount;

    /**
     * @example 2023-05-03 10:45:11
     *
     * @var string
     */
    public $endTime;

    /**
     * @example GHB56VD
     *
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @example 2023-05-03 10:35:11
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 4452
     *
     * @var int
     */
    public $vum;
    protected $_name = [
        'agentCount' => 'AgentCount',
        'endTime'    => 'EndTime',
        'reportId'   => 'ReportId',
        'reportName' => 'ReportName',
        'startTime'  => 'StartTime',
        'vum'        => 'Vum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->reportName) {
            $res['ReportName'] = $this->reportName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reportOverView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ReportName'])) {
            $model->reportName = $map['ReportName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }

        return $model;
    }
}
