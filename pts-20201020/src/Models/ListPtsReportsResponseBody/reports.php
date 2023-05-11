<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsReportsResponseBody;

use AlibabaCloud\Tea\Model;

class reports extends Model
{
    /**
     * @example 1637157073000
     *
     * @var int
     */
    public $actualStartTime;

    /**
     * @example 10分钟
     *
     * @var string
     */
    public $duration;

    /**
     * @example 7RLPM3Y2
     *
     * @var string
     */
    public $reportId;

    /**
     * @example test
     *
     * @var string
     */
    public $reportName;

    /**
     * @example 1000
     *
     * @var int
     */
    public $vum;
    protected $_name = [
        'actualStartTime' => 'ActualStartTime',
        'duration'        => 'Duration',
        'reportId'        => 'ReportId',
        'reportName'      => 'ReportName',
        'vum'             => 'Vum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualStartTime) {
            $res['ActualStartTime'] = $this->actualStartTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->reportName) {
            $res['ReportName'] = $this->reportName;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualStartTime'])) {
            $model->actualStartTime = $map['ActualStartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ReportName'])) {
            $model->reportName = $map['ReportName'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }

        return $model;
    }
}
