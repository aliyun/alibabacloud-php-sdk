<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\changeTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\invoiceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\orderBaseInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\passengerInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\refundTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo;

class module extends Model
{
    /**
     * @var changeTicketInfoList[]
     */
    public $changeTicketInfoList;

    /**
     * @var invoiceInfo
     */
    public $invoiceInfo;

    /**
     * @var orderBaseInfo
     */
    public $orderBaseInfo;

    /**
     * @var passengerInfoList[]
     */
    public $passengerInfoList;

    /**
     * @var priceInfoList[]
     */
    public $priceInfoList;

    /**
     * @var refundTicketInfoList[]
     */
    public $refundTicketInfoList;

    /**
     * @var trainOrderInfo
     */
    public $trainOrderInfo;
    protected $_name = [
        'changeTicketInfoList' => 'change_ticket_info_list',
        'invoiceInfo' => 'invoice_info',
        'orderBaseInfo' => 'order_base_info',
        'passengerInfoList' => 'passenger_info_list',
        'priceInfoList' => 'price_info_list',
        'refundTicketInfoList' => 'refund_ticket_info_list',
        'trainOrderInfo' => 'train_order_info',
    ];

    public function validate()
    {
        if (\is_array($this->changeTicketInfoList)) {
            Model::validateArray($this->changeTicketInfoList);
        }
        if (null !== $this->invoiceInfo) {
            $this->invoiceInfo->validate();
        }
        if (null !== $this->orderBaseInfo) {
            $this->orderBaseInfo->validate();
        }
        if (\is_array($this->passengerInfoList)) {
            Model::validateArray($this->passengerInfoList);
        }
        if (\is_array($this->priceInfoList)) {
            Model::validateArray($this->priceInfoList);
        }
        if (\is_array($this->refundTicketInfoList)) {
            Model::validateArray($this->refundTicketInfoList);
        }
        if (null !== $this->trainOrderInfo) {
            $this->trainOrderInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeTicketInfoList) {
            if (\is_array($this->changeTicketInfoList)) {
                $res['change_ticket_info_list'] = [];
                $n1 = 0;
                foreach ($this->changeTicketInfoList as $item1) {
                    $res['change_ticket_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->invoiceInfo) {
            $res['invoice_info'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toArray($noStream) : $this->invoiceInfo;
        }

        if (null !== $this->orderBaseInfo) {
            $res['order_base_info'] = null !== $this->orderBaseInfo ? $this->orderBaseInfo->toArray($noStream) : $this->orderBaseInfo;
        }

        if (null !== $this->passengerInfoList) {
            if (\is_array($this->passengerInfoList)) {
                $res['passenger_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerInfoList as $item1) {
                    $res['passenger_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->priceInfoList) {
            if (\is_array($this->priceInfoList)) {
                $res['price_info_list'] = [];
                $n1 = 0;
                foreach ($this->priceInfoList as $item1) {
                    $res['price_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->refundTicketInfoList) {
            if (\is_array($this->refundTicketInfoList)) {
                $res['refund_ticket_info_list'] = [];
                $n1 = 0;
                foreach ($this->refundTicketInfoList as $item1) {
                    $res['refund_ticket_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->trainOrderInfo) {
            $res['train_order_info'] = null !== $this->trainOrderInfo ? $this->trainOrderInfo->toArray($noStream) : $this->trainOrderInfo;
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
        if (isset($map['change_ticket_info_list'])) {
            if (!empty($map['change_ticket_info_list'])) {
                $model->changeTicketInfoList = [];
                $n1 = 0;
                foreach ($map['change_ticket_info_list'] as $item1) {
                    $model->changeTicketInfoList[$n1++] = changeTicketInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['invoice_info'])) {
            $model->invoiceInfo = invoiceInfo::fromMap($map['invoice_info']);
        }

        if (isset($map['order_base_info'])) {
            $model->orderBaseInfo = orderBaseInfo::fromMap($map['order_base_info']);
        }

        if (isset($map['passenger_info_list'])) {
            if (!empty($map['passenger_info_list'])) {
                $model->passengerInfoList = [];
                $n1 = 0;
                foreach ($map['passenger_info_list'] as $item1) {
                    $model->passengerInfoList[$n1++] = passengerInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['price_info_list'])) {
            if (!empty($map['price_info_list'])) {
                $model->priceInfoList = [];
                $n1 = 0;
                foreach ($map['price_info_list'] as $item1) {
                    $model->priceInfoList[$n1++] = priceInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['refund_ticket_info_list'])) {
            if (!empty($map['refund_ticket_info_list'])) {
                $model->refundTicketInfoList = [];
                $n1 = 0;
                foreach ($map['refund_ticket_info_list'] as $item1) {
                    $model->refundTicketInfoList[$n1++] = refundTicketInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['train_order_info'])) {
            $model->trainOrderInfo = trainOrderInfo::fromMap($map['train_order_info']);
        }

        return $model;
    }
}
