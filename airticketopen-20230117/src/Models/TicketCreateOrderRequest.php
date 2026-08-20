<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCreateOrderRequest\contact;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCreateOrderRequest\orderProduct;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCreateOrderRequest\totalDistributionPrice;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCreateOrderRequest\travelers;

class TicketCreateOrderRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @var string
     */
    public $distributorOrderId;

    /**
     * @var orderProduct
     */
    public $orderProduct;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var totalDistributionPrice
     */
    public $totalDistributionPrice;

    /**
     * @var travelers[]
     */
    public $travelers;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'contact' => 'Contact',
        'distributorOrderId' => 'DistributorOrderId',
        'orderProduct' => 'OrderProduct',
        'quantity' => 'Quantity',
        'totalDistributionPrice' => 'TotalDistributionPrice',
        'travelers' => 'Travelers',
    ];

    public function validate()
    {
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        if (null !== $this->orderProduct) {
            $this->orderProduct->validate();
        }
        if (null !== $this->totalDistributionPrice) {
            $this->totalDistributionPrice->validate();
        }
        if (\is_array($this->travelers)) {
            Model::validateArray($this->travelers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }

        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
        }

        if (null !== $this->distributorOrderId) {
            $res['DistributorOrderId'] = $this->distributorOrderId;
        }

        if (null !== $this->orderProduct) {
            $res['OrderProduct'] = null !== $this->orderProduct ? $this->orderProduct->toArray($noStream) : $this->orderProduct;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->totalDistributionPrice) {
            $res['TotalDistributionPrice'] = null !== $this->totalDistributionPrice ? $this->totalDistributionPrice->toArray($noStream) : $this->totalDistributionPrice;
        }

        if (null !== $this->travelers) {
            if (\is_array($this->travelers)) {
                $res['Travelers'] = [];
                $n1 = 0;
                foreach ($this->travelers as $item1) {
                    $res['Travelers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }

        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }

        if (isset($map['DistributorOrderId'])) {
            $model->distributorOrderId = $map['DistributorOrderId'];
        }

        if (isset($map['OrderProduct'])) {
            $model->orderProduct = orderProduct::fromMap($map['OrderProduct']);
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['TotalDistributionPrice'])) {
            $model->totalDistributionPrice = totalDistributionPrice::fromMap($map['TotalDistributionPrice']);
        }

        if (isset($map['Travelers'])) {
            if (!empty($map['Travelers'])) {
                $model->travelers = [];
                $n1 = 0;
                foreach ($map['Travelers'] as $item1) {
                    $model->travelers[$n1] = travelers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
