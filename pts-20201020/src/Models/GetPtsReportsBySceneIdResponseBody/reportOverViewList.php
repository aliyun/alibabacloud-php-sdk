<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportsBySceneIdResponseBody;

use AlibabaCloud\Tea\Model;

class reportOverViewList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $agentCount;

    /**
     * @example 2021-02-26 16:38:30
     *
     * @var string
     */
    public $endTime;

    /**
     * @example NGGB5FV
     *
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @example 2021-02-26 16:28:30
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 100
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
     * @return reportOverViewList
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
