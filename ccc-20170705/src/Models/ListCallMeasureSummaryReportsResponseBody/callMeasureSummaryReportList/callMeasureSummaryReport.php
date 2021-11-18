<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallMeasureSummaryReportsResponseBody\callMeasureSummaryReportList;

use AlibabaCloud\Tea\Model;

class callMeasureSummaryReport extends Model
{
    /**
     * @var string
     */
    public $day;

    /**
     * @var int
     */
    public $inboundCount;

    /**
     * @var int
     */
    public $inboundDurationByMinute;

    /**
     * @var string
     */
    public $month;

    /**
     * @var int
     */
    public $outboundCount;

    /**
     * @var int
     */
    public $outboundDurationByMinute;

    /**
     * @var string
     */
    public $year;
    protected $_name = [
        'day'                      => 'Day',
        'inboundCount'             => 'InboundCount',
        'inboundDurationByMinute'  => 'InboundDurationByMinute',
        'month'                    => 'Month',
        'outboundCount'            => 'OutboundCount',
        'outboundDurationByMinute' => 'OutboundDurationByMinute',
        'year'                     => 'Year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->inboundCount) {
            $res['InboundCount'] = $this->inboundCount;
        }
        if (null !== $this->inboundDurationByMinute) {
            $res['InboundDurationByMinute'] = $this->inboundDurationByMinute;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->outboundCount) {
            $res['OutboundCount'] = $this->outboundCount;
        }
        if (null !== $this->outboundDurationByMinute) {
            $res['OutboundDurationByMinute'] = $this->outboundDurationByMinute;
        }
        if (null !== $this->year) {
            $res['Year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callMeasureSummaryReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['InboundCount'])) {
            $model->inboundCount = $map['InboundCount'];
        }
        if (isset($map['InboundDurationByMinute'])) {
            $model->inboundDurationByMinute = $map['InboundDurationByMinute'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['OutboundCount'])) {
            $model->outboundCount = $map['OutboundCount'];
        }
        if (isset($map['OutboundDurationByMinute'])) {
            $model->outboundDurationByMinute = $map['OutboundDurationByMinute'];
        }
        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
