<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeChartDataRequest extends Model
{
    /**
     * @var string
     */
    public $charId;

    /**
     * @var string
     */
    public $chartId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $reportId;

    /**
     * @var int
     */
    public $timeEnd;

    /**
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'charId' => 'CharId',
        'chartId' => 'ChartId',
        'lang' => 'Lang',
        'reportId' => 'ReportId',
        'timeEnd' => 'TimeEnd',
        'timeStart' => 'TimeStart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charId) {
            $res['CharId'] = $this->charId;
        }

        if (null !== $this->chartId) {
            $res['ChartId'] = $this->chartId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }

        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
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
        if (isset($map['CharId'])) {
            $model->charId = $map['CharId'];
        }

        if (isset($map['ChartId'])) {
            $model->chartId = $map['ChartId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }

        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        return $model;
    }
}
