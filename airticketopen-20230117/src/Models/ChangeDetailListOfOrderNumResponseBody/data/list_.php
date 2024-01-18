<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changedJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changeFeeDetails;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changePassengers;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\contact;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\lastJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\originalJourneys;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var changeFeeDetails[]
     */
    public $changeFeeDetails;

    /**
     * @example 4988430***950
     *
     * @var int
     */
    public $changeOrderNum;

    /**
     * @var changePassengers[]
     */
    public $changePassengers;

    /**
     * @example 1
     *
     * @var int
     */
    public $changeReasonType;

    /**
     * @var changedJourneys[]
     */
    public $changedJourneys;

    /**
     * @example reason desc
     *
     * @var string
     */
    public $closeReason;

    /**
     * @example 1677415244000
     *
     * @var int
     */
    public $closeUtcTime;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @example 1677415276000
     *
     * @var int
     */
    public $createUtcTime;

    /**
     * @example 1677415278000
     *
     * @var int
     */
    public $lastConfirmUtcTime;

    /**
     * @var lastJourneys[]
     */
    public $lastJourneys;

    /**
     * @example 5988430***541
     *
     * @var int
     */
    public $orderNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @var originalJourneys[]
     */
    public $originalJourneys;

    /**
     * @example 2
     *
     * @var int
     */
    public $payStatus;

    /**
     * @example 1677415255000
     *
     * @var int
     */
    public $paySuccessUtcTime;

    /**
     * @example 300
     *
     * @var float
     */
    public $totalAmount;

    /**
     * @example hkduendkd-2023-dj0
     *
     * @var string
     */
    public $transactionNo;
    protected $_name = [
        'changeFeeDetails'   => 'change_fee_details',
        'changeOrderNum'     => 'change_order_num',
        'changePassengers'   => 'change_passengers',
        'changeReasonType'   => 'change_reason_type',
        'changedJourneys'    => 'changed_journeys',
        'closeReason'        => 'close_reason',
        'closeUtcTime'       => 'close_utc_time',
        'contact'            => 'contact',
        'createUtcTime'      => 'create_utc_time',
        'lastConfirmUtcTime' => 'last_confirm_utc_time',
        'lastJourneys'       => 'last_journeys',
        'orderNum'           => 'order_num',
        'orderStatus'        => 'order_status',
        'originalJourneys'   => 'original_journeys',
        'payStatus'          => 'pay_status',
        'paySuccessUtcTime'  => 'pay_success_utc_time',
        'totalAmount'        => 'total_amount',
        'transactionNo'      => 'transaction_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeFeeDetails) {
            $res['change_fee_details'] = [];
            if (null !== $this->changeFeeDetails && \is_array($this->changeFeeDetails)) {
                $n = 0;
                foreach ($this->changeFeeDetails as $item) {
                    $res['change_fee_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changeOrderNum) {
            $res['change_order_num'] = $this->changeOrderNum;
        }
        if (null !== $this->changePassengers) {
            $res['change_passengers'] = [];
            if (null !== $this->changePassengers && \is_array($this->changePassengers)) {
                $n = 0;
                foreach ($this->changePassengers as $item) {
                    $res['change_passengers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changeReasonType) {
            $res['change_reason_type'] = $this->changeReasonType;
        }
        if (null !== $this->changedJourneys) {
            $res['changed_journeys'] = [];
            if (null !== $this->changedJourneys && \is_array($this->changedJourneys)) {
                $n = 0;
                foreach ($this->changedJourneys as $item) {
                    $res['changed_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->closeReason) {
            $res['close_reason'] = $this->closeReason;
        }
        if (null !== $this->closeUtcTime) {
            $res['close_utc_time'] = $this->closeUtcTime;
        }
        if (null !== $this->contact) {
            $res['contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        if (null !== $this->createUtcTime) {
            $res['create_utc_time'] = $this->createUtcTime;
        }
        if (null !== $this->lastConfirmUtcTime) {
            $res['last_confirm_utc_time'] = $this->lastConfirmUtcTime;
        }
        if (null !== $this->lastJourneys) {
            $res['last_journeys'] = [];
            if (null !== $this->lastJourneys && \is_array($this->lastJourneys)) {
                $n = 0;
                foreach ($this->lastJourneys as $item) {
                    $res['last_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->originalJourneys) {
            $res['original_journeys'] = [];
            if (null !== $this->originalJourneys && \is_array($this->originalJourneys)) {
                $n = 0;
                foreach ($this->originalJourneys as $item) {
                    $res['original_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }
        if (null !== $this->paySuccessUtcTime) {
            $res['pay_success_utc_time'] = $this->paySuccessUtcTime;
        }
        if (null !== $this->totalAmount) {
            $res['total_amount'] = $this->totalAmount;
        }
        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_fee_details'])) {
            if (!empty($map['change_fee_details'])) {
                $model->changeFeeDetails = [];
                $n                       = 0;
                foreach ($map['change_fee_details'] as $item) {
                    $model->changeFeeDetails[$n++] = null !== $item ? changeFeeDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['change_order_num'])) {
            $model->changeOrderNum = $map['change_order_num'];
        }
        if (isset($map['change_passengers'])) {
            if (!empty($map['change_passengers'])) {
                $model->changePassengers = [];
                $n                       = 0;
                foreach ($map['change_passengers'] as $item) {
                    $model->changePassengers[$n++] = null !== $item ? changePassengers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['change_reason_type'])) {
            $model->changeReasonType = $map['change_reason_type'];
        }
        if (isset($map['changed_journeys'])) {
            if (!empty($map['changed_journeys'])) {
                $model->changedJourneys = [];
                $n                      = 0;
                foreach ($map['changed_journeys'] as $item) {
                    $model->changedJourneys[$n++] = null !== $item ? changedJourneys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['close_reason'])) {
            $model->closeReason = $map['close_reason'];
        }
        if (isset($map['close_utc_time'])) {
            $model->closeUtcTime = $map['close_utc_time'];
        }
        if (isset($map['contact'])) {
            $model->contact = contact::fromMap($map['contact']);
        }
        if (isset($map['create_utc_time'])) {
            $model->createUtcTime = $map['create_utc_time'];
        }
        if (isset($map['last_confirm_utc_time'])) {
            $model->lastConfirmUtcTime = $map['last_confirm_utc_time'];
        }
        if (isset($map['last_journeys'])) {
            if (!empty($map['last_journeys'])) {
                $model->lastJourneys = [];
                $n                   = 0;
                foreach ($map['last_journeys'] as $item) {
                    $model->lastJourneys[$n++] = null !== $item ? lastJourneys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['original_journeys'])) {
            if (!empty($map['original_journeys'])) {
                $model->originalJourneys = [];
                $n                       = 0;
                foreach ($map['original_journeys'] as $item) {
                    $model->originalJourneys[$n++] = null !== $item ? originalJourneys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }
        if (isset($map['pay_success_utc_time'])) {
            $model->paySuccessUtcTime = $map['pay_success_utc_time'];
        }
        if (isset($map['total_amount'])) {
            $model->totalAmount = $map['total_amount'];
        }
        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }

        return $model;
    }
}
