<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerList;

class module extends Model
{
    /**
     * @var string
     */
    public $bookUserId;

    /**
     * @var string
     */
    public $bookUserName;

    /**
     * @var string
     */
    public $closeReason;

    /**
     * @var int
     */
    public $closeTime;

    /**
     * @var string
     */
    public $closeTimeStr;

    /**
     * @var contactInfo
     */
    public $contactInfo;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createTimeStr;

    /**
     * @var string[]
     */
    public $extInfoMap;

    /**
     * @var journeyList[]
     */
    public $journeyList;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var orderItemList[]
     */
    public $orderItemList;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerItemDetailList[]
     */
    public $passengerItemDetailList;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var int
     */
    public $payExpireTime;

    /**
     * @var string
     */
    public $payExpireTimeStr;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $payTime;

    /**
     * @var string
     */
    public $payTimeStr;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $succeedTime;

    /**
     * @var string
     */
    public $succeedTimeStr;

    /**
     * @var int
     */
    public $totalPrice;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'bookUserId' => 'book_user_id',
        'bookUserName' => 'book_user_name',
        'closeReason' => 'close_reason',
        'closeTime' => 'close_time',
        'closeTimeStr' => 'close_time_str',
        'contactInfo' => 'contact_info',
        'createTime' => 'create_time',
        'createTimeStr' => 'create_time_str',
        'extInfoMap' => 'ext_info_map',
        'journeyList' => 'journey_list',
        'orderId' => 'order_id',
        'orderItemList' => 'order_item_list',
        'outOrderId' => 'out_order_id',
        'passengerItemDetailList' => 'passenger_item_detail_list',
        'passengerList' => 'passenger_list',
        'payExpireTime' => 'pay_expire_time',
        'payExpireTimeStr' => 'pay_expire_time_str',
        'payStatus' => 'pay_status',
        'payTime' => 'pay_time',
        'payTimeStr' => 'pay_time_str',
        'payType' => 'pay_type',
        'status' => 'status',
        'succeedTime' => 'succeed_time',
        'succeedTimeStr' => 'succeed_time_str',
        'totalPrice' => 'total_price',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (null !== $this->contactInfo) {
            $this->contactInfo->validate();
        }
        if (\is_array($this->extInfoMap)) {
            Model::validateArray($this->extInfoMap);
        }
        if (\is_array($this->journeyList)) {
            Model::validateArray($this->journeyList);
        }
        if (\is_array($this->orderItemList)) {
            Model::validateArray($this->orderItemList);
        }
        if (\is_array($this->passengerItemDetailList)) {
            Model::validateArray($this->passengerItemDetailList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookUserId) {
            $res['book_user_id'] = $this->bookUserId;
        }

        if (null !== $this->bookUserName) {
            $res['book_user_name'] = $this->bookUserName;
        }

        if (null !== $this->closeReason) {
            $res['close_reason'] = $this->closeReason;
        }

        if (null !== $this->closeTime) {
            $res['close_time'] = $this->closeTime;
        }

        if (null !== $this->closeTimeStr) {
            $res['close_time_str'] = $this->closeTimeStr;
        }

        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toArray($noStream) : $this->contactInfo;
        }

        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }

        if (null !== $this->createTimeStr) {
            $res['create_time_str'] = $this->createTimeStr;
        }

        if (null !== $this->extInfoMap) {
            if (\is_array($this->extInfoMap)) {
                $res['ext_info_map'] = [];
                foreach ($this->extInfoMap as $key1 => $value1) {
                    $res['ext_info_map'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->journeyList) {
            if (\is_array($this->journeyList)) {
                $res['journey_list'] = [];
                $n1 = 0;
                foreach ($this->journeyList as $item1) {
                    $res['journey_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->orderItemList) {
            if (\is_array($this->orderItemList)) {
                $res['order_item_list'] = [];
                $n1 = 0;
                foreach ($this->orderItemList as $item1) {
                    $res['order_item_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->passengerItemDetailList) {
            if (\is_array($this->passengerItemDetailList)) {
                $res['passenger_item_detail_list'] = [];
                $n1 = 0;
                foreach ($this->passengerItemDetailList as $item1) {
                    $res['passenger_item_detail_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->payExpireTime) {
            $res['pay_expire_time'] = $this->payExpireTime;
        }

        if (null !== $this->payExpireTimeStr) {
            $res['pay_expire_time_str'] = $this->payExpireTimeStr;
        }

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }

        if (null !== $this->payTimeStr) {
            $res['pay_time_str'] = $this->payTimeStr;
        }

        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->succeedTime) {
            $res['succeed_time'] = $this->succeedTime;
        }

        if (null !== $this->succeedTimeStr) {
            $res['succeed_time_str'] = $this->succeedTimeStr;
        }

        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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
        if (isset($map['book_user_id'])) {
            $model->bookUserId = $map['book_user_id'];
        }

        if (isset($map['book_user_name'])) {
            $model->bookUserName = $map['book_user_name'];
        }

        if (isset($map['close_reason'])) {
            $model->closeReason = $map['close_reason'];
        }

        if (isset($map['close_time'])) {
            $model->closeTime = $map['close_time'];
        }

        if (isset($map['close_time_str'])) {
            $model->closeTimeStr = $map['close_time_str'];
        }

        if (isset($map['contact_info'])) {
            $model->contactInfo = contactInfo::fromMap($map['contact_info']);
        }

        if (isset($map['create_time'])) {
            $model->createTime = $map['create_time'];
        }

        if (isset($map['create_time_str'])) {
            $model->createTimeStr = $map['create_time_str'];
        }

        if (isset($map['ext_info_map'])) {
            if (!empty($map['ext_info_map'])) {
                $model->extInfoMap = [];
                foreach ($map['ext_info_map'] as $key1 => $value1) {
                    $model->extInfoMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['journey_list'])) {
            if (!empty($map['journey_list'])) {
                $model->journeyList = [];
                $n1 = 0;
                foreach ($map['journey_list'] as $item1) {
                    $model->journeyList[$n1++] = journeyList::fromMap($item1);
                }
            }
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['order_item_list'])) {
            if (!empty($map['order_item_list'])) {
                $model->orderItemList = [];
                $n1 = 0;
                foreach ($map['order_item_list'] as $item1) {
                    $model->orderItemList[$n1++] = orderItemList::fromMap($item1);
                }
            }
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['passenger_item_detail_list'])) {
            if (!empty($map['passenger_item_detail_list'])) {
                $model->passengerItemDetailList = [];
                $n1 = 0;
                foreach ($map['passenger_item_detail_list'] as $item1) {
                    $model->passengerItemDetailList[$n1++] = passengerItemDetailList::fromMap($item1);
                }
            }
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

        if (isset($map['pay_expire_time'])) {
            $model->payExpireTime = $map['pay_expire_time'];
        }

        if (isset($map['pay_expire_time_str'])) {
            $model->payExpireTimeStr = $map['pay_expire_time_str'];
        }

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }

        if (isset($map['pay_time_str'])) {
            $model->payTimeStr = $map['pay_time_str'];
        }

        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['succeed_time'])) {
            $model->succeedTime = $map['succeed_time'];
        }

        if (isset($map['succeed_time_str'])) {
            $model->succeedTimeStr = $map['succeed_time_str'];
        }

        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
