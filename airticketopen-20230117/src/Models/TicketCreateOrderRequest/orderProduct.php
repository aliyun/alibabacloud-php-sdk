<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCreateOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCreateOrderRequest\orderProduct\distributionPrice;

class orderProduct extends Model
{
    /**
     * @var distributionPrice
     */
    public $distributionPrice;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $travelDate;
    protected $_name = [
        'distributionPrice' => 'DistributionPrice',
        'productId' => 'ProductId',
        'travelDate' => 'TravelDate',
    ];

    public function validate()
    {
        if (null !== $this->distributionPrice) {
            $this->distributionPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributionPrice) {
            $res['DistributionPrice'] = null !== $this->distributionPrice ? $this->distributionPrice->toArray($noStream) : $this->distributionPrice;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->travelDate) {
            $res['TravelDate'] = $this->travelDate;
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
        if (isset($map['DistributionPrice'])) {
            $model->distributionPrice = distributionPrice::fromMap($map['DistributionPrice']);
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['TravelDate'])) {
            $model->travelDate = $map['TravelDate'];
        }

        return $model;
    }
}
