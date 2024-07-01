<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class orderBaseInfo extends Model
{
    /**
     * @example 175634
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
     * @var string
     */
    public $exceedApplyId;

    /**
     * @var string
     */
    public $exceedThirdPartApplyId;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @example 13628
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @example 146178
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
     * @example CS-FLIGHT
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @var string
     */
    public $thirdpartCorpId;

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
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyId'                => 'apply_id',
        'btripTitle'             => 'btrip_title',
        'contactName'            => 'contact_name',
        'corpId'                 => 'corp_id',
        'corpName'               => 'corp_name',
        'departId'               => 'depart_id',
        'departName'             => 'depart_name',
        'exceedApplyId'          => 'exceed_apply_id',
        'exceedThirdPartApplyId' => 'exceed_third_part_apply_id',
        'gmtCreate'              => 'gmt_create',
        'gmtModify'              => 'gmt_modify',
        'itineraryId'            => 'itinerary_id',
        'orderId'                => 'order_id',
        'orderStatus'            => 'order_status',
        'thirdpartApplyId'       => 'thirdpart_apply_id',
        'thirdpartBusinessId'    => 'thirdpart_business_id',
        'thirdpartCorpId'        => 'thirdpart_corp_id',
        'thirdpartItineraryId'   => 'thirdpart_itinerary_id',
        'tripType'               => 'trip_type',
        'userId'                 => 'user_id',
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
        if (null !== $this->exceedThirdPartApplyId) {
            $res['exceed_third_part_apply_id'] = $this->exceedThirdPartApplyId;
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
        if (null !== $this->thirdpartBusinessId) {
            $res['thirdpart_business_id'] = $this->thirdpartBusinessId;
        }
        if (null !== $this->thirdpartCorpId) {
            $res['thirdpart_corp_id'] = $this->thirdpartCorpId;
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
        if (isset($map['exceed_third_part_apply_id'])) {
            $model->exceedThirdPartApplyId = $map['exceed_third_part_apply_id'];
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
        if (isset($map['thirdpart_business_id'])) {
            $model->thirdpartBusinessId = $map['thirdpart_business_id'];
        }
        if (isset($map['thirdpart_corp_id'])) {
            $model->thirdpartCorpId = $map['thirdpart_corp_id'];
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

        return $model;
    }
}
