<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\approve;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightOrderTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightOrderUserFeeList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightRefundApplyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightSegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\insureInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList;

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
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var insureInfoList[]
     */
    public $insureInfoList;

    /**
     * @var bool
     */
    public $mixPay;

    /**
     * @var float
     */
    public $orderReserveAmount;

    /**
     * @var int
     */
    public $passengerCount;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var priceInfoList[]
     */
    public $priceInfoList;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplier;

    /**
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
     * @var int
     */
    public $tripMode;

    /**
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
        'approve' => 'approve',
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'flightOrderTicketList' => 'flight_order_ticket_list',
        'flightOrderUserFeeList' => 'flight_order_user_fee_list',
        'flightRefundApplyList' => 'flight_refund_apply_list',
        'flightReshopApplyList' => 'flight_reshop_apply_list',
        'flightSegmentList' => 'flight_segment_list',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'id' => 'id',
        'insureInfoList' => 'insure_info_list',
        'mixPay' => 'mix_pay',
        'orderReserveAmount' => 'order_reserve_amount',
        'passengerCount' => 'passenger_count',
        'payTime' => 'pay_time',
        'priceInfoList' => 'price_info_list',
        'status' => 'status',
        'supplier' => 'supplier',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'ticketCorpReserveAmount' => 'ticket_corp_reserve_amount',
        'ticketPersonReserveAmount' => 'ticket_person_reserve_amount',
        'tripMode' => 'trip_mode',
        'tripType' => 'trip_type',
        'userAffiliateList' => 'user_affiliate_list',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (null !== $this->approve) {
            $this->approve->validate();
        }
        if (\is_array($this->flightOrderTicketList)) {
            Model::validateArray($this->flightOrderTicketList);
        }
        if (\is_array($this->flightOrderUserFeeList)) {
            Model::validateArray($this->flightOrderUserFeeList);
        }
        if (\is_array($this->flightRefundApplyList)) {
            Model::validateArray($this->flightRefundApplyList);
        }
        if (\is_array($this->flightReshopApplyList)) {
            Model::validateArray($this->flightReshopApplyList);
        }
        if (\is_array($this->flightSegmentList)) {
            Model::validateArray($this->flightSegmentList);
        }
        if (\is_array($this->insureInfoList)) {
            Model::validateArray($this->insureInfoList);
        }
        if (\is_array($this->priceInfoList)) {
            Model::validateArray($this->priceInfoList);
        }
        if (\is_array($this->thirdpartItineraryId)) {
            Model::validateArray($this->thirdpartItineraryId);
        }
        if (\is_array($this->userAffiliateList)) {
            Model::validateArray($this->userAffiliateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approve) {
            $res['approve'] = null !== $this->approve ? $this->approve->toArray($noStream) : $this->approve;
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
            if (\is_array($this->flightOrderTicketList)) {
                $res['flight_order_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->flightOrderTicketList as $item1) {
                    $res['flight_order_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightOrderUserFeeList) {
            if (\is_array($this->flightOrderUserFeeList)) {
                $res['flight_order_user_fee_list'] = [];
                $n1 = 0;
                foreach ($this->flightOrderUserFeeList as $item1) {
                    $res['flight_order_user_fee_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightRefundApplyList) {
            if (\is_array($this->flightRefundApplyList)) {
                $res['flight_refund_apply_list'] = [];
                $n1 = 0;
                foreach ($this->flightRefundApplyList as $item1) {
                    $res['flight_refund_apply_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightReshopApplyList) {
            if (\is_array($this->flightReshopApplyList)) {
                $res['flight_reshop_apply_list'] = [];
                $n1 = 0;
                foreach ($this->flightReshopApplyList as $item1) {
                    $res['flight_reshop_apply_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightSegmentList) {
            if (\is_array($this->flightSegmentList)) {
                $res['flight_segment_list'] = [];
                $n1 = 0;
                foreach ($this->flightSegmentList as $item1) {
                    $res['flight_segment_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->insureInfoList)) {
                $res['insure_info_list'] = [];
                $n1 = 0;
                foreach ($this->insureInfoList as $item1) {
                    $res['insure_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->priceInfoList)) {
                $res['price_info_list'] = [];
                $n1 = 0;
                foreach ($this->priceInfoList as $item1) {
                    $res['price_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->thirdpartItineraryId)) {
                $res['thirdpart_itinerary_id'] = [];
                $n1 = 0;
                foreach ($this->thirdpartItineraryId as $item1) {
                    $res['thirdpart_itinerary_id'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->userAffiliateList)) {
                $res['user_affiliate_list'] = [];
                $n1 = 0;
                foreach ($this->userAffiliateList as $item1) {
                    $res['user_affiliate_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['flight_order_ticket_list'] as $item1) {
                    $model->flightOrderTicketList[$n1] = flightOrderTicketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_order_user_fee_list'])) {
            if (!empty($map['flight_order_user_fee_list'])) {
                $model->flightOrderUserFeeList = [];
                $n1 = 0;
                foreach ($map['flight_order_user_fee_list'] as $item1) {
                    $model->flightOrderUserFeeList[$n1] = flightOrderUserFeeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_refund_apply_list'])) {
            if (!empty($map['flight_refund_apply_list'])) {
                $model->flightRefundApplyList = [];
                $n1 = 0;
                foreach ($map['flight_refund_apply_list'] as $item1) {
                    $model->flightRefundApplyList[$n1] = flightRefundApplyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_reshop_apply_list'])) {
            if (!empty($map['flight_reshop_apply_list'])) {
                $model->flightReshopApplyList = [];
                $n1 = 0;
                foreach ($map['flight_reshop_apply_list'] as $item1) {
                    $model->flightReshopApplyList[$n1] = flightReshopApplyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_segment_list'])) {
            if (!empty($map['flight_segment_list'])) {
                $model->flightSegmentList = [];
                $n1 = 0;
                foreach ($map['flight_segment_list'] as $item1) {
                    $model->flightSegmentList[$n1] = flightSegmentList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['insure_info_list'] as $item1) {
                    $model->insureInfoList[$n1] = insureInfoList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['price_info_list'] as $item1) {
                    $model->priceInfoList[$n1] = priceInfoList::fromMap($item1);
                    ++$n1;
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
                $model->thirdpartItineraryId = [];
                $n1 = 0;
                foreach ($map['thirdpart_itinerary_id'] as $item1) {
                    $model->thirdpartItineraryId[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['user_affiliate_list'] as $item1) {
                    $model->userAffiliateList[$n1] = userAffiliateList::fromMap($item1);
                    ++$n1;
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
