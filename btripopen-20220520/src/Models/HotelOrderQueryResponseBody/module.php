<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody\module\hotelInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody\module\invoiceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody\module\orderBaseInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody\module\passengerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody\module\priceInfoList;

class module extends Model
{
    /**
     * @var hotelInfo
     */
    public $hotelInfo;

    /**
     * @var invoiceInfo
     */
    public $invoiceInfo;

    /**
     * @var orderBaseInfo
     */
    public $orderBaseInfo;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var priceInfoList[]
     */
    public $priceInfoList;
    protected $_name = [
        'hotelInfo' => 'hotel_info',
        'invoiceInfo' => 'invoice_info',
        'orderBaseInfo' => 'order_base_info',
        'passengerList' => 'passenger_list',
        'priceInfoList' => 'price_info_list',
    ];

    public function validate()
    {
        if (null !== $this->hotelInfo) {
            $this->hotelInfo->validate();
        }
        if (null !== $this->invoiceInfo) {
            $this->invoiceInfo->validate();
        }
        if (null !== $this->orderBaseInfo) {
            $this->orderBaseInfo->validate();
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (\is_array($this->priceInfoList)) {
            Model::validateArray($this->priceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelInfo) {
            $res['hotel_info'] = null !== $this->hotelInfo ? $this->hotelInfo->toArray($noStream) : $this->hotelInfo;
        }

        if (null !== $this->invoiceInfo) {
            $res['invoice_info'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toArray($noStream) : $this->invoiceInfo;
        }

        if (null !== $this->orderBaseInfo) {
            $res['order_base_info'] = null !== $this->orderBaseInfo ? $this->orderBaseInfo->toArray($noStream) : $this->orderBaseInfo;
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

        if (null !== $this->priceInfoList) {
            if (\is_array($this->priceInfoList)) {
                $res['price_info_list'] = [];
                $n1 = 0;
                foreach ($this->priceInfoList as $item1) {
                    $res['price_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['hotel_info'])) {
            $model->hotelInfo = hotelInfo::fromMap($map['hotel_info']);
        }

        if (isset($map['invoice_info'])) {
            $model->invoiceInfo = invoiceInfo::fromMap($map['invoice_info']);
        }

        if (isset($map['order_base_info'])) {
            $model->orderBaseInfo = orderBaseInfo::fromMap($map['order_base_info']);
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

        if (isset($map['price_info_list'])) {
            if (!empty($map['price_info_list'])) {
                $model->priceInfoList = [];
                $n1 = 0;
                foreach ($map['price_info_list'] as $item1) {
                    $model->priceInfoList[$n1++] = priceInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
