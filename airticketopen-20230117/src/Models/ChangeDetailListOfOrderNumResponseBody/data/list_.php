<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changedJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changeFeeDetails;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changePassengers;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\contact;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\lastJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\originalJourneys;

class list_ extends Model
{
    /**
     * @var changeFeeDetails[]
     */
    public $changeFeeDetails;

    /**
     * @var int
     */
    public $changeOrderNum;

    /**
     * @var changePassengers[]
     */
    public $changePassengers;

    /**
     * @var int
     */
    public $changeReasonType;

    /**
     * @var changedJourneys[]
     */
    public $changedJourneys;

    /**
     * @var string
     */
    public $closeReason;

    /**
     * @var int
     */
    public $closeUtcTime;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @var int
     */
    public $createUtcTime;

    /**
     * @var int
     */
    public $lastConfirmUtcTime;

    /**
     * @var lastJourneys[]
     */
    public $lastJourneys;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var originalJourneys[]
     */
    public $originalJourneys;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $paySuccessUtcTime;

    /**
     * @var float
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $transactionNo;
    protected $_name = [
        'changeFeeDetails' => 'change_fee_details',
        'changeOrderNum' => 'change_order_num',
        'changePassengers' => 'change_passengers',
        'changeReasonType' => 'change_reason_type',
        'changedJourneys' => 'changed_journeys',
        'closeReason' => 'close_reason',
        'closeUtcTime' => 'close_utc_time',
        'contact' => 'contact',
        'createUtcTime' => 'create_utc_time',
        'lastConfirmUtcTime' => 'last_confirm_utc_time',
        'lastJourneys' => 'last_journeys',
        'orderNum' => 'order_num',
        'orderStatus' => 'order_status',
        'originalJourneys' => 'original_journeys',
        'payStatus' => 'pay_status',
        'paySuccessUtcTime' => 'pay_success_utc_time',
        'totalAmount' => 'total_amount',
        'transactionNo' => 'transaction_no',
    ];

    public function validate()
    {
        if (\is_array($this->changeFeeDetails)) {
            Model::validateArray($this->changeFeeDetails);
        }
        if (\is_array($this->changePassengers)) {
            Model::validateArray($this->changePassengers);
        }
        if (\is_array($this->changedJourneys)) {
            Model::validateArray($this->changedJourneys);
        }
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        if (\is_array($this->lastJourneys)) {
            Model::validateArray($this->lastJourneys);
        }
        if (\is_array($this->originalJourneys)) {
            Model::validateArray($this->originalJourneys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeFeeDetails) {
            if (\is_array($this->changeFeeDetails)) {
                $res['change_fee_details'] = [];
                $n1 = 0;
                foreach ($this->changeFeeDetails as $item1) {
                    $res['change_fee_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeOrderNum) {
            $res['change_order_num'] = $this->changeOrderNum;
        }

        if (null !== $this->changePassengers) {
            if (\is_array($this->changePassengers)) {
                $res['change_passengers'] = [];
                $n1 = 0;
                foreach ($this->changePassengers as $item1) {
                    $res['change_passengers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeReasonType) {
            $res['change_reason_type'] = $this->changeReasonType;
        }

        if (null !== $this->changedJourneys) {
            if (\is_array($this->changedJourneys)) {
                $res['changed_journeys'] = [];
                $n1 = 0;
                foreach ($this->changedJourneys as $item1) {
                    $res['changed_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
        }

        if (null !== $this->createUtcTime) {
            $res['create_utc_time'] = $this->createUtcTime;
        }

        if (null !== $this->lastConfirmUtcTime) {
            $res['last_confirm_utc_time'] = $this->lastConfirmUtcTime;
        }

        if (null !== $this->lastJourneys) {
            if (\is_array($this->lastJourneys)) {
                $res['last_journeys'] = [];
                $n1 = 0;
                foreach ($this->lastJourneys as $item1) {
                    $res['last_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->originalJourneys)) {
                $res['original_journeys'] = [];
                $n1 = 0;
                foreach ($this->originalJourneys as $item1) {
                    $res['original_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_fee_details'])) {
            if (!empty($map['change_fee_details'])) {
                $model->changeFeeDetails = [];
                $n1 = 0;
                foreach ($map['change_fee_details'] as $item1) {
                    $model->changeFeeDetails[$n1] = changeFeeDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['change_order_num'])) {
            $model->changeOrderNum = $map['change_order_num'];
        }

        if (isset($map['change_passengers'])) {
            if (!empty($map['change_passengers'])) {
                $model->changePassengers = [];
                $n1 = 0;
                foreach ($map['change_passengers'] as $item1) {
                    $model->changePassengers[$n1] = changePassengers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['change_reason_type'])) {
            $model->changeReasonType = $map['change_reason_type'];
        }

        if (isset($map['changed_journeys'])) {
            if (!empty($map['changed_journeys'])) {
                $model->changedJourneys = [];
                $n1 = 0;
                foreach ($map['changed_journeys'] as $item1) {
                    $model->changedJourneys[$n1] = changedJourneys::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['last_journeys'] as $item1) {
                    $model->lastJourneys[$n1] = lastJourneys::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['original_journeys'] as $item1) {
                    $model->originalJourneys[$n1] = originalJourneys::fromMap($item1);
                    ++$n1;
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
