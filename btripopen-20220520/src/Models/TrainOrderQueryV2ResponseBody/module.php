<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\changeTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\invoiceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\orderBaseInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\passengerInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\refundTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo;
use AlibabaCloud\Tea\Model;

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
        'invoiceInfo'          => 'invoice_info',
        'orderBaseInfo'        => 'order_base_info',
        'passengerInfoList'    => 'passenger_info_list',
        'priceInfoList'        => 'price_info_list',
        'refundTicketInfoList' => 'refund_ticket_info_list',
        'trainOrderInfo'       => 'train_order_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeTicketInfoList) {
            $res['change_ticket_info_list'] = [];
            if (null !== $this->changeTicketInfoList && \is_array($this->changeTicketInfoList)) {
                $n = 0;
                foreach ($this->changeTicketInfoList as $item) {
                    $res['change_ticket_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invoiceInfo) {
            $res['invoice_info'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toMap() : null;
        }
        if (null !== $this->orderBaseInfo) {
            $res['order_base_info'] = null !== $this->orderBaseInfo ? $this->orderBaseInfo->toMap() : null;
        }
        if (null !== $this->passengerInfoList) {
            $res['passenger_info_list'] = [];
            if (null !== $this->passengerInfoList && \is_array($this->passengerInfoList)) {
                $n = 0;
                foreach ($this->passengerInfoList as $item) {
                    $res['passenger_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->refundTicketInfoList) {
            $res['refund_ticket_info_list'] = [];
            if (null !== $this->refundTicketInfoList && \is_array($this->refundTicketInfoList)) {
                $n = 0;
                foreach ($this->refundTicketInfoList as $item) {
                    $res['refund_ticket_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trainOrderInfo) {
            $res['train_order_info'] = null !== $this->trainOrderInfo ? $this->trainOrderInfo->toMap() : null;
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
        if (isset($map['change_ticket_info_list'])) {
            if (!empty($map['change_ticket_info_list'])) {
                $model->changeTicketInfoList = [];
                $n                           = 0;
                foreach ($map['change_ticket_info_list'] as $item) {
                    $model->changeTicketInfoList[$n++] = null !== $item ? changeTicketInfoList::fromMap($item) : $item;
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
                $n                        = 0;
                foreach ($map['passenger_info_list'] as $item) {
                    $model->passengerInfoList[$n++] = null !== $item ? passengerInfoList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['refund_ticket_info_list'])) {
            if (!empty($map['refund_ticket_info_list'])) {
                $model->refundTicketInfoList = [];
                $n                           = 0;
                foreach ($map['refund_ticket_info_list'] as $item) {
                    $model->refundTicketInfoList[$n++] = null !== $item ? refundTicketInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['train_order_info'])) {
            $model->trainOrderInfo = trainOrderInfo::fromMap($map['train_order_info']);
        }

        return $model;
    }
}
