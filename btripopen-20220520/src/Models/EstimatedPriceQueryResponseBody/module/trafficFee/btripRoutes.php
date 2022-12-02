<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes\cheapest;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes\mostExpensive;
use AlibabaCloud\Tea\Model;

class btripRoutes extends Model
{
    /**
     * @var int
     */
    public $arrDate;

    /**
     * @var int
     */
    public $btripType;

    /**
     * @var cheapest
     */
    public $cheapest;

    /**
     * @var int
     */
    public $depDate;

    /**
     * @var string
     */
    public $destCity;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $itineraryId;

    /**
     * @var int
     */
    public $itineraryIndex;

    /**
     * @var mostExpensive
     */
    public $mostExpensive;

    /**
     * @var string
     */
    public $orgCity;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'arrDate'        => 'arr_date',
        'btripType'      => 'btrip_type',
        'cheapest'       => 'cheapest',
        'depDate'        => 'dep_date',
        'destCity'       => 'dest_city',
        'errMsg'         => 'err_msg',
        'itineraryId'    => 'itinerary_id',
        'itineraryIndex' => 'itinerary_index',
        'mostExpensive'  => 'most_expensive',
        'orgCity'        => 'org_city',
        'success'        => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->btripType) {
            $res['btrip_type'] = $this->btripType;
        }
        if (null !== $this->cheapest) {
            $res['cheapest'] = null !== $this->cheapest ? $this->cheapest->toMap() : null;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->destCity) {
            $res['dest_city'] = $this->destCity;
        }
        if (null !== $this->errMsg) {
            $res['err_msg'] = $this->errMsg;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->itineraryIndex) {
            $res['itinerary_index'] = $this->itineraryIndex;
        }
        if (null !== $this->mostExpensive) {
            $res['most_expensive'] = null !== $this->mostExpensive ? $this->mostExpensive->toMap() : null;
        }
        if (null !== $this->orgCity) {
            $res['org_city'] = $this->orgCity;
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
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }
        if (isset($map['btrip_type'])) {
            $model->btripType = $map['btrip_type'];
        }
        if (isset($map['cheapest'])) {
            $model->cheapest = cheapest::fromMap($map['cheapest']);
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['dest_city'])) {
            $model->destCity = $map['dest_city'];
        }
        if (isset($map['err_msg'])) {
            $model->errMsg = $map['err_msg'];
        }
        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }
        if (isset($map['itinerary_index'])) {
            $model->itineraryIndex = $map['itinerary_index'];
        }
        if (isset($map['most_expensive'])) {
            $model->mostExpensive = mostExpensive::fromMap($map['most_expensive']);
        }
        if (isset($map['org_city'])) {
            $model->orgCity = $map['org_city'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
