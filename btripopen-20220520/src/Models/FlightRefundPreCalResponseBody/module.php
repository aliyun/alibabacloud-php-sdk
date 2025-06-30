<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody\module\multiRefundCalList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalResponseBody\module\returnReason;

class module extends Model
{
    /**
     * @var bool
     */
    public $flightChange;

    /**
     * @var string
     */
    public $itemUnitId;

    /**
     * @var multiRefundCalList[]
     */
    public $multiRefundCalList;

    /**
     * @var int
     */
    public $preRefundMoney;

    /**
     * @var int
     */
    public $refundFee;

    /**
     * @var returnReason[]
     */
    public $returnReason;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'flightChange' => 'flight_change',
        'itemUnitId' => 'item_unit_id',
        'multiRefundCalList' => 'multi_refund_cal_list',
        'preRefundMoney' => 'pre_refund_money',
        'refundFee' => 'refund_fee',
        'returnReason' => 'return_reason',
        'sessionId' => 'session_id',
        'tips' => 'tips',
    ];

    public function validate()
    {
        if (\is_array($this->multiRefundCalList)) {
            Model::validateArray($this->multiRefundCalList);
        }
        if (\is_array($this->returnReason)) {
            Model::validateArray($this->returnReason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightChange) {
            $res['flight_change'] = $this->flightChange;
        }

        if (null !== $this->itemUnitId) {
            $res['item_unit_id'] = $this->itemUnitId;
        }

        if (null !== $this->multiRefundCalList) {
            if (\is_array($this->multiRefundCalList)) {
                $res['multi_refund_cal_list'] = [];
                $n1 = 0;
                foreach ($this->multiRefundCalList as $item1) {
                    $res['multi_refund_cal_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preRefundMoney) {
            $res['pre_refund_money'] = $this->preRefundMoney;
        }

        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }

        if (null !== $this->returnReason) {
            if (\is_array($this->returnReason)) {
                $res['return_reason'] = [];
                $n1 = 0;
                foreach ($this->returnReason as $item1) {
                    $res['return_reason'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }

        if (null !== $this->tips) {
            $res['tips'] = $this->tips;
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
        if (isset($map['flight_change'])) {
            $model->flightChange = $map['flight_change'];
        }

        if (isset($map['item_unit_id'])) {
            $model->itemUnitId = $map['item_unit_id'];
        }

        if (isset($map['multi_refund_cal_list'])) {
            if (!empty($map['multi_refund_cal_list'])) {
                $model->multiRefundCalList = [];
                $n1 = 0;
                foreach ($map['multi_refund_cal_list'] as $item1) {
                    $model->multiRefundCalList[$n1] = multiRefundCalList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pre_refund_money'])) {
            $model->preRefundMoney = $map['pre_refund_money'];
        }

        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }

        if (isset($map['return_reason'])) {
            if (!empty($map['return_reason'])) {
                $model->returnReason = [];
                $n1 = 0;
                foreach ($map['return_reason'] as $item1) {
                    $model->returnReason[$n1] = returnReason::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        if (isset($map['tips'])) {
            $model->tips = $map['tips'];
        }

        return $model;
    }
}
