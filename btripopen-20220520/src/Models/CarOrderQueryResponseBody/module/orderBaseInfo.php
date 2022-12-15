<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class orderBaseInfo extends Model
{
    /**
     * @example xxxxx
     *
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $btripCause;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @example xxxxxxxx
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @example 10101010
     *
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @example 1669274251000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1669274251000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @example 1012000000000000
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 5
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @example 100000
     *
     * @var int
     */
    public $subOrderId;

    /**
     * @example thirdpart_1010101010
     *
     * @var string
     */
    public $thirdDepartId;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @example xxxxxxxx
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'applyId'              => 'apply_id',
        'btripCause'           => 'btrip_cause',
        'btripTitle'           => 'btrip_title',
        'corpId'               => 'corp_id',
        'corpName'             => 'corp_name',
        'departId'             => 'depart_id',
        'departName'           => 'depart_name',
        'gmtCreate'            => 'gmt_create',
        'gmtModified'          => 'gmt_modified',
        'itineraryId'          => 'itinerary_id',
        'orderId'              => 'order_id',
        'orderStatus'          => 'order_status',
        'subOrderId'           => 'sub_order_id',
        'thirdDepartId'        => 'third_depart_id',
        'thirdpartApplyId'     => 'thirdpart_apply_id',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'userId'               => 'user_id',
        'userName'             => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->btripCause) {
            $res['btrip_cause'] = $this->btripCause;
        }
        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->subOrderId) {
            $res['sub_order_id'] = $this->subOrderId;
        }
        if (null !== $this->thirdDepartId) {
            $res['third_depart_id'] = $this->thirdDepartId;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderBaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['btrip_cause'])) {
            $model->btripCause = $map['btrip_cause'];
        }
        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }
        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['sub_order_id'])) {
            $model->subOrderId = $map['sub_order_id'];
        }
        if (isset($map['third_depart_id'])) {
            $model->thirdDepartId = $map['third_depart_id'];
        }
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
