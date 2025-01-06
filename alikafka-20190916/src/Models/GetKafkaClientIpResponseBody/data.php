<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The value true indicates that the broker is not of the latest minor version.
     *
     * >  If the broker is not of the latest minor version, the sampled logs may not be accurate. This may cause inaccurate IP information. Therefore, we recommend that you update your broker to the latest version at the earliest opportunity.
     * @example true
     *
     * @var bool
     */
    public $alert;

    /**
     * @description The data returned.
     *
     * @var \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody\data\data
     */
    public $data;

    /**
     * @description The end of the date range within which data is queried.
     *
     * @example 1716343502000
     *
     * @var int
     */
    public $endDate;

    /**
     * @description The time range within which the client IP addresses are queried.
     *
     * >  The valid value is 1 hour. If the beginning of the time range to query and the end of the time range to query exceeds 1 hour, only data within 1 hour is returned.
     * @example 1
     *
     * @var int
     */
    public $searchTimeRange;

    /**
     * @description The beginning of the date range within which data is queried.
     *
     * @example 1716343501000
     *
     * @var int
     */
    public $startDate;

    /**
     * @description The date range within which the client IP addresses are queried.
     *
     * >  The valid value is 7 days. If the beginning of the date range to query and the end of the date range to query exceeds 7 days, only data within 7 days is returned.
     * @example 7
     *
     * @var int
     */
    public $timeLimitDay;
    protected $_name = [
        'alert'           => 'Alert',
        'data'            => 'Data',
        'endDate'         => 'EndDate',
        'searchTimeRange' => 'SearchTimeRange',
        'startDate'       => 'StartDate',
        'timeLimitDay'    => 'TimeLimitDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alert) {
            $res['Alert'] = $this->alert;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->searchTimeRange) {
            $res['SearchTimeRange'] = $this->searchTimeRange;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->timeLimitDay) {
            $res['TimeLimitDay'] = $this->timeLimitDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alert'])) {
            $model->alert = $map['Alert'];
        }
        if (isset($map['Data'])) {
            $model->data = \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody\data\data::fromMap($map['Data']);
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['SearchTimeRange'])) {
            $model->searchTimeRange = $map['SearchTimeRange'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TimeLimitDay'])) {
            $model->timeLimitDay = $map['TimeLimitDay'];
        }

        return $model;
    }
}
