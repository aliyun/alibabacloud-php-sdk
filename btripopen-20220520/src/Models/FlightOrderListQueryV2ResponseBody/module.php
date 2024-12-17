<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\approve;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightOrderTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightOrderUserFeeList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\insureInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var approve
     */
    public $approve;

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
     * @var flightOrderTicketList[]
     */
    public $flightOrderTicketList;

    /**
     * @var flightOrderUserFeeList[]
     */
    public $flightOrderUserFeeList;

    /**
     * @var flightRefundApplyList[]
     */
    public $flightRefundApplyList;

    /**
     * @var flightReshopApplyList[]
     */
    public $flightReshopApplyList;

    /**
     * @var flightSegmentList[]
     */
    public $flightSegmentList;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 200042
     *
     * @var string
     */
    public $id;

    /**
     * @var insureInfoList[]
     */
    public $insureInfoList;

    /**
     * @example true
     *
     * @var bool
     */
    public $mixPay;

    /**
     * @var float
     */
    public $orderReserveAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $passengerCount;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $payTime;

    /**
     * @var priceInfoList[]
     */
    public $priceInfoList;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplier;

    /**
     * @example cs9897766
     *
     * @var string[]
     */
    public $thirdpartItineraryId;

    /**
     * @var float
     */
    public $ticketCorpReserveAmount;

    /**
     * @var float
     */
    public $ticketPersonReserveAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripMode;

    /**
     * @example 0
     *
     * @var int
     */
    public $tripType;

    /**
     * @var userAffiliateList[]
     */
    public $userAffiliateList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'approve'                   => 'approve',
        'corpId'                    => 'corp_id',
        'corpName'                  => 'corp_name',
        'departId'                  => 'depart_id',
        'departName'                => 'depart_name',
        'flightOrderTicketList'     => 'flight_order_ticket_list',
        'flightOrderUserFeeList'    => 'flight_order_user_fee_list',
        'flightRefundApplyList'     => 'flight_refund_apply_list',
        'flightReshopApplyList'     => 'flight_reshop_apply_list',
        'flightSegmentList'         => 'flight_segment_list',
        'gmtCreate'                 => 'gmt_create',
        'gmtModified'               => 'gmt_modified',
        'id'                        => 'id',
        'insureInfoList'            => 'insure_info_list',
        'mixPay'                    => 'mix_pay',
        'orderReserveAmount'        => 'order_reserve_amount',
        'passengerCount'            => 'passenger_count',
        'payTime'                   => 'pay_time',
        'priceInfoList'             => 'price_info_list',
        'status'                    => 'status',
        'supplier'                  => 'supplier',
        'thirdpartItineraryId'      => 'thirdpart_itinerary_id',
        'ticketCorpReserveAmount'   => 'ticket_corp_reserve_amount',
        'ticketPersonReserveAmount' => 'ticket_person_reserve_amount',
        'tripMode'                  => 'trip_mode',
        'tripType'                  => 'trip_type',
        'userAffiliateList'         => 'user_affiliate_list',
        'userId'                    => 'user_id',
        'userName'                  => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approve) {
            $res['approve'] = null !== $this->approve ? $this->approve->toMap() : null;
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
        if (null !== $this->flightOrderTicketList) {
            $res['flight_order_ticket_list'] = [];
            if (null !== $this->flightOrderTicketList && \is_array($this->flightOrderTicketList)) {
                $n = 0;
                foreach ($this->flightOrderTicketList as $item) {
                    $res['flight_order_ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightOrderUserFeeList) {
            $res['flight_order_user_fee_list'] = [];
            if (null !== $this->flightOrderUserFeeList && \is_array($this->flightOrderUserFeeList)) {
                $n = 0;
                foreach ($this->flightOrderUserFeeList as $item) {
                    $res['flight_order_user_fee_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightRefundApplyList) {
            $res['flight_refund_apply_list'] = [];
            if (null !== $this->flightRefundApplyList && \is_array($this->flightRefundApplyList)) {
                $n = 0;
                foreach ($this->flightRefundApplyList as $item) {
                    $res['flight_refund_apply_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightReshopApplyList) {
            $res['flight_reshop_apply_list'] = [];
            if (null !== $this->flightReshopApplyList && \is_array($this->flightReshopApplyList)) {
                $n = 0;
                foreach ($this->flightReshopApplyList as $item) {
                    $res['flight_reshop_apply_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightSegmentList) {
            $res['flight_segment_list'] = [];
            if (null !== $this->flightSegmentList && \is_array($this->flightSegmentList)) {
                $n = 0;
                foreach ($this->flightSegmentList as $item) {
                    $res['flight_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->insureInfoList) {
            $res['insure_info_list'] = [];
            if (null !== $this->insureInfoList && \is_array($this->insureInfoList)) {
                $n = 0;
                foreach ($this->insureInfoList as $item) {
                    $res['insure_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mixPay) {
            $res['mix_pay'] = $this->mixPay;
        }
        if (null !== $this->orderReserveAmount) {
            $res['order_reserve_amount'] = $this->orderReserveAmount;
        }
        if (null !== $this->passengerCount) {
            $res['passenger_count'] = $this->passengerCount;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->priceInfoList) {
            $res['price_info_list'] = [];
            if (null !== $this->priceInfoList && \is_array($this->priceInfoList)) {
                $n = 0;
                foreach ($this->priceInfoList as $item) {
                    $res['price_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->supplier) {
            $res['supplier'] = $this->supplier;
        }
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->ticketCorpReserveAmount) {
            $res['ticket_corp_reserve_amount'] = $this->ticketCorpReserveAmount;
        }
        if (null !== $this->ticketPersonReserveAmount) {
            $res['ticket_person_reserve_amount'] = $this->ticketPersonReserveAmount;
        }
        if (null !== $this->tripMode) {
            $res['trip_mode'] = $this->tripMode;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }
        if (null !== $this->userAffiliateList) {
            $res['user_affiliate_list'] = [];
            if (null !== $this->userAffiliateList && \is_array($this->userAffiliateList)) {
                $n = 0;
                foreach ($this->userAffiliateList as $item) {
                    $res['user_affiliate_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['approve'])) {
            $model->approve = approve::fromMap($map['approve']);
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
        if (isset($map['flight_order_ticket_list'])) {
            if (!empty($map['flight_order_ticket_list'])) {
                $model->flightOrderTicketList = [];
                $n                            = 0;
                foreach ($map['flight_order_ticket_list'] as $item) {
                    $model->flightOrderTicketList[$n++] = null !== $item ? flightOrderTicketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_order_user_fee_list'])) {
            if (!empty($map['flight_order_user_fee_list'])) {
                $model->flightOrderUserFeeList = [];
                $n                             = 0;
                foreach ($map['flight_order_user_fee_list'] as $item) {
                    $model->flightOrderUserFeeList[$n++] = null !== $item ? flightOrderUserFeeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_refund_apply_list'])) {
            if (!empty($map['flight_refund_apply_list'])) {
                $model->flightRefundApplyList = [];
                $n                            = 0;
                foreach ($map['flight_refund_apply_list'] as $item) {
                    $model->flightRefundApplyList[$n++] = null !== $item ? flightRefundApplyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_reshop_apply_list'])) {
            if (!empty($map['flight_reshop_apply_list'])) {
                $model->flightReshopApplyList = [];
                $n                            = 0;
                foreach ($map['flight_reshop_apply_list'] as $item) {
                    $model->flightReshopApplyList[$n++] = null !== $item ? flightReshopApplyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_segment_list'])) {
            if (!empty($map['flight_segment_list'])) {
                $model->flightSegmentList = [];
                $n                        = 0;
                foreach ($map['flight_segment_list'] as $item) {
                    $model->flightSegmentList[$n++] = null !== $item ? flightSegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['insure_info_list'])) {
            if (!empty($map['insure_info_list'])) {
                $model->insureInfoList = [];
                $n                     = 0;
                foreach ($map['insure_info_list'] as $item) {
                    $model->insureInfoList[$n++] = null !== $item ? insureInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['mix_pay'])) {
            $model->mixPay = $map['mix_pay'];
        }
        if (isset($map['order_reserve_amount'])) {
            $model->orderReserveAmount = $map['order_reserve_amount'];
        }
        if (isset($map['passenger_count'])) {
            $model->passengerCount = $map['passenger_count'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['price_info_list'])) {
            if (!empty($map['price_info_list'])) {
                $model->priceInfoList = [];
                $n                    = 0;
                foreach ($map['price_info_list'] as $item) {
                    $model->priceInfoList[$n++] = null !== $item ? priceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['supplier'])) {
            $model->supplier = $map['supplier'];
        }
        if (isset($map['thirdpart_itinerary_id'])) {
            if (!empty($map['thirdpart_itinerary_id'])) {
                $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
            }
        }
        if (isset($map['ticket_corp_reserve_amount'])) {
            $model->ticketCorpReserveAmount = $map['ticket_corp_reserve_amount'];
        }
        if (isset($map['ticket_person_reserve_amount'])) {
            $model->ticketPersonReserveAmount = $map['ticket_person_reserve_amount'];
        }
        if (isset($map['trip_mode'])) {
            $model->tripMode = $map['trip_mode'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }
        if (isset($map['user_affiliate_list'])) {
            if (!empty($map['user_affiliate_list'])) {
                $model->userAffiliateList = [];
                $n                        = 0;
                foreach ($map['user_affiliate_list'] as $item) {
                    $model->userAffiliateList[$n++] = null !== $item ? userAffiliateList::fromMap($item) : $item;
                }
            }
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
