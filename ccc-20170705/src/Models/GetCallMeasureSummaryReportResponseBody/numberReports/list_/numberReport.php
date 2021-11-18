<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports\list_;

use AlibabaCloud\Tea\Model;

class numberReport extends Model
{
    /**
     * @var int
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
     * @var int
     */
    public $month;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $outboundCount;

    /**
     * @var int
     */
    public $outboundDurationByMinute;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'day'                      => 'Day',
        'inboundCount'             => 'InboundCount',
        'inboundDurationByMinute'  => 'InboundDurationByMinute',
        'month'                    => 'Month',
        'number'                   => 'Number',
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
        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
     * @return numberReport
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
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
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
