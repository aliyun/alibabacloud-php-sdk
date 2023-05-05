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
    public $carScenesCode;

    /**
     * @example 460e254b5a5b4bd0801744a2790e5d78
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $subCorpId;

    /**
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
        'carScenesCode'     => 'car_scenes_code',
        'itineraryId'       => 'itinerary_id',
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
        if (null !== $this->carScenesCode) {
            $res['car_scenes_code'] = $this->carScenesCode;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
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
        if (isset($map['car_scenes_code'])) {
            $model->carScenesCode = $map['car_scenes_code'];
        }
        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
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
