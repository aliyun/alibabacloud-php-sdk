<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class hotelFeeDetail extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $criterion;

    /**
     * @var string
     */
    public $itineraryId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $tripDays;
    protected $_name = [
        'city' => 'city',
        'criterion' => 'criterion',
        'itineraryId' => 'itinerary_id',
        'total' => 'total',
        'tripDays' => 'trip_days',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        if (null !== $this->criterion) {
            $res['criterion'] = $this->criterion;
        }

        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->tripDays) {
            $res['trip_days'] = $this->tripDays;
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
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        if (isset($map['criterion'])) {
            $model->criterion = $map['criterion'];
        }

        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['trip_days'])) {
            $model->tripDays = $map['trip_days'];
        }

        return $model;
    }
}
