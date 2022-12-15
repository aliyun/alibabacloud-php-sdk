<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class EstimatedPriceQueryRequest extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @example flight
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @example 1670601600000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1245
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @example 1670428800000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 12345678910
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'arrCity'     => 'arr_city',
        'category'    => 'category',
        'depCity'     => 'dep_city',
        'endTime'     => 'end_time',
        'itineraryId' => 'itinerary_id',
        'startTime'   => 'start_time',
        'userId'      => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstimatedPriceQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
