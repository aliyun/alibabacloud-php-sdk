<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes\cheapest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes\mostExpensive;
use AlibabaCloud\Tea\Model;

class btripRoutes extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @example 2022-12-09T00:00Z
     *
     * @var int
     */
    public $arrDate;

    /**
     * @description cheapest
     *
     * @var cheapest
     */
    public $cheapest;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @example 2022-12-08T00:00Z
     *
     * @var int
     */
    public $depDate;

    /**
     * @example demo
     *
     * @var string
     */
    public $errMsg;

    /**
     * @example 1245
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @var mostExpensive
     */
    public $mostExpensive;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'arrCity'       => 'arr_city',
        'arrDate'       => 'arr_date',
        'cheapest'      => 'cheapest',
        'depCity'       => 'dep_city',
        'depDate'       => 'dep_date',
        'errMsg'        => 'err_msg',
        'itineraryId'   => 'itinerary_id',
        'mostExpensive' => 'most_expensive',
        'success'       => 'success',
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
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->cheapest) {
            $res['cheapest'] = null !== $this->cheapest ? $this->cheapest->toMap() : null;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->errMsg) {
            $res['err_msg'] = $this->errMsg;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->mostExpensive) {
            $res['most_expensive'] = null !== $this->mostExpensive ? $this->mostExpensive->toMap() : null;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return btripRoutes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }
        if (isset($map['cheapest'])) {
            $model->cheapest = cheapest::fromMap($map['cheapest']);
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['err_msg'])) {
            $model->errMsg = $map['err_msg'];
        }
        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }
        if (isset($map['most_expensive'])) {
            $model->mostExpensive = mostExpensive::fromMap($map['most_expensive']);
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
