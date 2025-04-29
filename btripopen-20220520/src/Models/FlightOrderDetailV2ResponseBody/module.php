<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\contactInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList;

class module extends Model
{
    /**
     * @var string
     */
    public $b2gVipCode;

    /**
     * @var string
     */
    public $bookSuccTime;

    /**
     * @var string
     */
    public $bookUserId;

    /**
     * @var string
     */
    public $bookUserName;

    /**
     * @var int
     */
    public $buildPrice;

    /**
     * @var contactInfoDTO
     */
    public $contactInfoDTO;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $facevalue;

    /**
     * @var flightTaleInfoDTO
     */
    public $flightTaleInfoDTO;

    /**
     * @var bool
     */
    public $isProtocol;

    /**
     * @var bool
     */
    public $isemergency;

    /**
     * @var bool
     */
    public $issendmessage;

    /**
     * @var int
     */
    public $oilPrice;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var string[]
     */
    public $passengerSegmentMap;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var int
     */
    public $saleprice;

    /**
     * @var bool
     */
    public $sendcpsms;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalServiceFeePrice;
    protected $_name = [
        'b2gVipCode' => 'b2g_vip_code',
        'bookSuccTime' => 'book_succ_time',
        'bookUserId' => 'book_user_id',
        'bookUserName' => 'book_user_name',
        'buildPrice' => 'build_price',
        'contactInfoDTO' => 'contact_info_d_t_o',
        'createTime' => 'create_time',
        'facevalue' => 'facevalue',
        'flightTaleInfoDTO' => 'flight_tale_info_d_t_o',
        'isProtocol' => 'is_protocol',
        'isemergency' => 'isemergency',
        'issendmessage' => 'issendmessage',
        'oilPrice' => 'oil_price',
        'orderId' => 'order_id',
        'orderPrice' => 'order_price',
        'outOrderId' => 'out_order_id',
        'passengerList' => 'passenger_list',
        'passengerSegmentMap' => 'passenger_segment_map',
        'payTime' => 'pay_time',
        'saleprice' => 'saleprice',
        'sendcpsms' => 'sendcpsms',
        'status' => 'status',
        'totalServiceFeePrice' => 'total_service_fee_price',
    ];

    public function validate()
    {
        if (null !== $this->contactInfoDTO) {
            $this->contactInfoDTO->validate();
        }
        if (null !== $this->flightTaleInfoDTO) {
            $this->flightTaleInfoDTO->validate();
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (\is_array($this->passengerSegmentMap)) {
            Model::validateArray($this->passengerSegmentMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['contact_info_d_t_o'] = null !== $this->contactInfoDTO ? $this->contactInfoDTO->toArray($noStream) : $this->contactInfoDTO;
        }

        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }

        if (null !== $this->facevalue) {
            $res['facevalue'] = $this->facevalue;
        }

        if (null !== $this->flightTaleInfoDTO) {
            $res['flight_tale_info_d_t_o'] = null !== $this->flightTaleInfoDTO ? $this->flightTaleInfoDTO->toArray($noStream) : $this->flightTaleInfoDTO;
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
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->passengerSegmentMap) {
            if (\is_array($this->passengerSegmentMap)) {
                $res['passenger_segment_map'] = [];
                foreach ($this->passengerSegmentMap as $key1 => $value1) {
                    $res['passenger_segment_map'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1++] = passengerList::fromMap($item1);
                }
            }
        }

        if (isset($map['passenger_segment_map'])) {
            if (!empty($map['passenger_segment_map'])) {
                $model->passengerSegmentMap = [];
                foreach ($map['passenger_segment_map'] as $key1 => $value1) {
                    $model->passengerSegmentMap[$key1] = $value1;
                }
            }
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
