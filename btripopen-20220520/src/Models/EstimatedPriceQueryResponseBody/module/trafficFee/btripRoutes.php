<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes\cheapest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes\mostExpensive;

class btripRoutes extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var int
     */
    public $arrDate;

    /**
     * @var cheapest
     */
    public $cheapest;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var int
     */
    public $depDate;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $itineraryId;

    /**
     * @var mostExpensive
     */
    public $mostExpensive;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'arrCity' => 'arr_city',
        'arrDate' => 'arr_date',
        'cheapest' => 'cheapest',
        'depCity' => 'dep_city',
        'depDate' => 'dep_date',
        'errMsg' => 'err_msg',
        'itineraryId' => 'itinerary_id',
        'mostExpensive' => 'most_expensive',
        'success' => 'success',
    ];

    public function validate()
    {
        if (null !== $this->cheapest) {
            $this->cheapest->validate();
        }
        if (null !== $this->mostExpensive) {
            $this->mostExpensive->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }

        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }

        if (null !== $this->cheapest) {
            $res['cheapest'] = null !== $this->cheapest ? $this->cheapest->toArray($noStream) : $this->cheapest;
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
            $res['most_expensive'] = null !== $this->mostExpensive ? $this->mostExpensive->toArray($noStream) : $this->mostExpensive;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
