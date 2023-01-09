<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class GetJMeterSampleMetricsRequest extends Model
{
    /**
     * @example 1637157070000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1637157073000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 7R4RE352
     *
     * @var string
     */
    public $reportId;

    /**
     * @example 0
     *
     * @var int
     */
    public $samplerId;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
        'reportId'  => 'ReportId',
        'samplerId' => 'SamplerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->samplerId) {
            $res['SamplerId'] = $this->samplerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJMeterSampleMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['SamplerId'])) {
            $model->samplerId = $map['SamplerId'];
        }

        return $model;
    }
}
