<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module;

use AlibabaCloud\Tea\Model;

class orderBaseInfo extends Model
{
    /**
     * @example 1003784135
     *
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @example 12110002222
     *
     * @var string
     */
    public $contactPhone;

    /**
     * @example btripsy4yd7v0gdpdntpp
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @example 1422113021033961000
     *
     * @var string
     */
    public $exceedApplyId;

    /**
     * @example 1422113021033961000
     *
     * @var string
     */
    public $exceedThirdpartApplyId;

    /**
     * @example 2022-07-22 15:54:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-07-22 15:54:29
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @example 42942924
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @example 2849819724653209258
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 4
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @example 01-2023-01214
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example DHDI2209141OEGHWRN
     *
     * @var string
     */
    public $thirdpartDepartId;

    /**
     * @example CS-FLIGHT
     *
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @example 0
     *
     * @var int
     */
    public $tripType;

    /**
     * @example 1231212
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'applyId'                => 'apply_id',
        'btripTitle'             => 'btrip_title',
        'contactName'            => 'contact_name',
        'contactPhone'           => 'contact_phone',
        'corpId'                 => 'corp_id',
        'corpName'               => 'corp_name',
        'departId'               => 'depart_id',
        'departName'             => 'depart_name',
        'exceedApplyId'          => 'exceed_apply_id',
        'exceedThirdpartApplyId' => 'exceed_thirdpart_apply_id',
        'gmtCreate'              => 'gmt_create',
        'gmtModify'              => 'gmt_modify',
        'itineraryId'            => 'itinerary_id',
        'orderId'                => 'order_id',
        'orderStatus'            => 'order_status',
        'thirdpartApplyId'       => 'thirdpart_apply_id',
        'thirdpartDepartId'      => 'thirdpart_depart_id',
        'thirdpartItineraryId'   => 'thirdpart_itinerary_id',
        'tripType'               => 'trip_type',
        'userId'                 => 'user_id',
        'userNick'               => 'user_nick',
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
        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
        }
        if (null !== $this->contactName) {
            $res['contact_name'] = $this->contactName;
        }
        if (null !== $this->contactPhone) {
            $res['contact_phone'] = $this->contactPhone;
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
        if (null !== $this->exceedApplyId) {
            $res['exceed_apply_id'] = $this->exceedApplyId;
        }
        if (null !== $this->exceedThirdpartApplyId) {
            $res['exceed_thirdpart_apply_id'] = $this->exceedThirdpartApplyId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
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
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->thirdpartDepartId) {
            $res['thirdpart_depart_id'] = $this->thirdpartDepartId;
        }
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['user_nick'] = $this->userNick;
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
        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
        }
        if (isset($map['contact_name'])) {
            $model->contactName = $map['contact_name'];
        }
        if (isset($map['contact_phone'])) {
            $model->contactPhone = $map['contact_phone'];
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
        if (isset($map['exceed_apply_id'])) {
            $model->exceedApplyId = $map['exceed_apply_id'];
        }
        if (isset($map['exceed_thirdpart_apply_id'])) {
            $model->exceedThirdpartApplyId = $map['exceed_thirdpart_apply_id'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
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
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if (isset($map['thirdpart_depart_id'])) {
            $model->thirdpartDepartId = $map['thirdpart_depart_id'];
        }
        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_nick'])) {
            $model->userNick = $map['user_nick'];
        }

        return $model;
    }
}
