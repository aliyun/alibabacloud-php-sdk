<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryOrderResponseBody\data\order;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryOrderResponseBody\data\vouchers;

class data extends Model
{
    /**
     * @var order
     */
    public $order;

    /**
     * @var vouchers[]
     */
    public $vouchers;
    protected $_name = [
        'order' => 'Order',
        'vouchers' => 'Vouchers',
    ];

    public function validate()
    {
        if (null !== $this->order) {
            $this->order->validate();
        }
        if (\is_array($this->vouchers)) {
            Model::validateArray($this->vouchers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toArray($noStream) : $this->order;
        }

        if (null !== $this->vouchers) {
            if (\is_array($this->vouchers)) {
                $res['Vouchers'] = [];
                $n1 = 0;
                foreach ($this->vouchers as $item1) {
                    $res['Vouchers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }

        if (isset($map['Vouchers'])) {
            if (!empty($map['Vouchers'])) {
                $model->vouchers = [];
                $n1 = 0;
                foreach ($map['Vouchers'] as $item1) {
                    $model->vouchers[$n1] = vouchers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
