<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class AddressGetRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $actionType;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @var string
     */
    public $carScenesCode;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @example 460e254b5a5b4bd0801744a2790e5d78
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $subCorpId;

    /**
     * @example https://alibtrip.open.com
     *
     * @var string
     */
    public $taobaoCallbackUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'actionType'        => 'action_type',
        'arrCityCode'       => 'arr_city_code',
        'arrCityName'       => 'arr_city_name',
        'carScenesCode'     => 'car_scenes_code',
        'depCityCode'       => 'dep_city_code',
        'depCityName'       => 'dep_city_name',
        'depDate'           => 'dep_date',
        'itineraryId'       => 'itinerary_id',
        'orderId'           => 'order_Id',
        'phone'             => 'phone',
        'subCorpId'         => 'sub_corp_id',
        'taobaoCallbackUrl' => 'taobao_callback_url',
        'type'              => 'type',
        'userId'            => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['action_type'] = $this->actionType;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->carScenesCode) {
            $res['car_scenes_code'] = $this->carScenesCode;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->orderId) {
            $res['order_Id'] = $this->orderId;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
        }
        if (null !== $this->taobaoCallbackUrl) {
            $res['taobao_callback_url'] = $this->taobaoCallbackUrl;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddressGetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_type'])) {
            $model->actionType = $map['action_type'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['car_scenes_code'])) {
            $model->carScenesCode = $map['car_scenes_code'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }
        if (isset($map['order_Id'])) {
            $model->orderId = $map['order_Id'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }
        if (isset($map['taobao_callback_url'])) {
            $model->taobaoCallbackUrl = $map['taobao_callback_url'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
