<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $alert;
    /**
     * @var \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody\data\data
     */
    public $data;
    /**
     * @var int
     */
    public $endDate;
    /**
     * @var int
     */
    public $searchTimeRange;
    /**
     * @var int
     */
    public $startDate;
    /**
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
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alert) {
            $res['Alert'] = $this->alert;
        }

        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
