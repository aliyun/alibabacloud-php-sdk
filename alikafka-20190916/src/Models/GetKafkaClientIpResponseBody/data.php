<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $alert;

    /**
     * @var \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody\data\data
     */
    public $data;

    /**
     * @example 1716343502000
     *
     * @var int
     */
    public $endDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $searchTimeRange;

    /**
     * @example 1716343501000
     *
     * @var int
     */
    public $startDate;

    /**
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
