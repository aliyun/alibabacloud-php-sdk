<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\contactInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $b2gVipCode;

    /**
     * @example 2023-06-29 15:28:44
     *
     * @var string
     */
    public $bookSuccTime;

    /**
     * @example qingg1234
     *
     * @var string
     */
    public $bookUserId;

    /**
     * @var string
     */
    public $bookUserName;

    /**
     * @example 0
     *
     * @var int
     */
    public $buildPrice;

    /**
     * @var contactInfoDTO
     */
    public $contactInfoDTO;

    /**
     * @example 2023-06-29 15:03:11
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 126000
     *
     * @var int
     */
    public $facevalue;

    /**
     * @var flightTaleInfoDTO
     */
    public $flightTaleInfoDTO;

    /**
     * @example false
     *
     * @var bool
     */
    public $isProtocol;

    /**
     * @example false
     *
     * @var bool
     */
    public $isemergency;

    /**
     * @example true
     *
     * @var bool
     */
    public $issendmessage;

    /**
     * @example 4000
     *
     * @var int
     */
    public $oilPrice;

    /**
     * @example 1017002195370467200
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 8500
     *
     * @var int
     */
    public $orderPrice;

    /**
     * @example 1017002195370467137
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @description key :passengerId
     *
     * value :segmentId
     * @var string[]
     */
    public $passengerSegmentMap;

    /**
     * @example 2023-06-29 15:03:59
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 4500
     *
     * @var int
     */
    public $saleprice;

    /**
     * @example true
     *
     * @var bool
     */
    public $sendcpsms;

    /**
     * @example 5
     *
     * @var int
     */
    public $status;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalServiceFeePrice;
    protected $_name = [
        'b2gVipCode'           => 'b2g_vip_code',
        'bookSuccTime'         => 'book_succ_time',
        'bookUserId'           => 'book_user_id',
        'bookUserName'         => 'book_user_name',
        'buildPrice'           => 'build_price',
        'contactInfoDTO'       => 'contact_info_d_t_o',
        'createTime'           => 'create_time',
        'facevalue'            => 'facevalue',
        'flightTaleInfoDTO'    => 'flight_tale_info_d_t_o',
        'isProtocol'           => 'is_protocol',
        'isemergency'          => 'isemergency',
        'issendmessage'        => 'issendmessage',
        'oilPrice'             => 'oil_price',
        'orderId'              => 'order_id',
        'orderPrice'           => 'order_price',
        'outOrderId'           => 'out_order_id',
        'passengerList'        => 'passenger_list',
        'passengerSegmentMap'  => 'passenger_segment_map',
        'payTime'              => 'pay_time',
        'saleprice'            => 'saleprice',
        'sendcpsms'            => 'sendcpsms',
        'status'               => 'status',
        'totalServiceFeePrice' => 'total_service_fee_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->b2gVipCode) {
            $res['b2g_vip_code'] = $this->b2gVipCode;
        }
        if (null !== $this->bookSuccTime) {
            $res['book_succ_time'] = $this->bookSuccTime;
        }
        if (null !== $this->bookUserId) {
            $res['book_user_id'] = $this->bookUserId;
        }
        if (null !== $this->bookUserName) {
            $res['book_user_name'] = $this->bookUserName;
        }
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }
        if (null !== $this->contactInfoDTO) {
            $res['contact_info_d_t_o'] = null !== $this->contactInfoDTO ? $this->contactInfoDTO->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->facevalue) {
            $res['facevalue'] = $this->facevalue;
        }
        if (null !== $this->flightTaleInfoDTO) {
            $res['flight_tale_info_d_t_o'] = null !== $this->flightTaleInfoDTO ? $this->flightTaleInfoDTO->toMap() : null;
        }
        if (null !== $this->isProtocol) {
            $res['is_protocol'] = $this->isProtocol;
        }
        if (null !== $this->isemergency) {
            $res['isemergency'] = $this->isemergency;
        }
        if (null !== $this->issendmessage) {
            $res['issendmessage'] = $this->issendmessage;
        }
        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->orderPrice) {
            $res['order_price'] = $this->orderPrice;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->passengerList) {
            $res['passenger_list'] = [];
            if (null !== $this->passengerList && \is_array($this->passengerList)) {
                $n = 0;
                foreach ($this->passengerList as $item) {
                    $res['passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passengerSegmentMap) {
            $res['passenger_segment_map'] = $this->passengerSegmentMap;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->saleprice) {
            $res['saleprice'] = $this->saleprice;
        }
        if (null !== $this->sendcpsms) {
            $res['sendcpsms'] = $this->sendcpsms;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalServiceFeePrice) {
            $res['total_service_fee_price'] = $this->totalServiceFeePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['b2g_vip_code'])) {
            $model->b2gVipCode = $map['b2g_vip_code'];
        }
        if (isset($map['book_succ_time'])) {
            $model->bookSuccTime = $map['book_succ_time'];
        }
        if (isset($map['book_user_id'])) {
            $model->bookUserId = $map['book_user_id'];
        }
        if (isset($map['book_user_name'])) {
            $model->bookUserName = $map['book_user_name'];
        }
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }
        if (isset($map['contact_info_d_t_o'])) {
            $model->contactInfoDTO = contactInfoDTO::fromMap($map['contact_info_d_t_o']);
        }
        if (isset($map['create_time'])) {
            $model->createTime = $map['create_time'];
        }
        if (isset($map['facevalue'])) {
            $model->facevalue = $map['facevalue'];
        }
        if (isset($map['flight_tale_info_d_t_o'])) {
            $model->flightTaleInfoDTO = flightTaleInfoDTO::fromMap($map['flight_tale_info_d_t_o']);
        }
        if (isset($map['is_protocol'])) {
            $model->isProtocol = $map['is_protocol'];
        }
        if (isset($map['isemergency'])) {
            $model->isemergency = $map['isemergency'];
        }
        if (isset($map['issendmessage'])) {
            $model->issendmessage = $map['issendmessage'];
        }
        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['order_price'])) {
            $model->orderPrice = $map['order_price'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n                    = 0;
                foreach ($map['passenger_list'] as $item) {
                    $model->passengerList[$n++] = null !== $item ? passengerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['passenger_segment_map'])) {
            $model->passengerSegmentMap = $map['passenger_segment_map'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['saleprice'])) {
            $model->saleprice = $map['saleprice'];
        }
        if (isset($map['sendcpsms'])) {
            $model->sendcpsms = $map['sendcpsms'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['total_service_fee_price'])) {
            $model->totalServiceFeePrice = $map['total_service_fee_price'];
        }

        return $model;
    }
}
