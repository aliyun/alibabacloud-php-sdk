<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody\data\calendarPriceStocks\distributionPrice;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody\data\calendarPriceStocks\marketPrice;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody\data\calendarPriceStocks\suggestedPrice;

class calendarPriceStocks extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var distributionPrice
     */
    public $distributionPrice;

    /**
     * @var marketPrice
     */
    public $marketPrice;

    /**
     * @var int
     */
    public $stock;

    /**
     * @var suggestedPrice
     */
    public $suggestedPrice;
    protected $_name = [
        'date' => 'Date',
        'distributionPrice' => 'DistributionPrice',
        'marketPrice' => 'MarketPrice',
        'stock' => 'Stock',
        'suggestedPrice' => 'SuggestedPrice',
    ];

    public function validate()
    {
        if (null !== $this->distributionPrice) {
            $this->distributionPrice->validate();
        }
        if (null !== $this->marketPrice) {
            $this->marketPrice->validate();
        }
        if (null !== $this->suggestedPrice) {
            $this->suggestedPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->distributionPrice) {
            $res['DistributionPrice'] = null !== $this->distributionPrice ? $this->distributionPrice->toArray($noStream) : $this->distributionPrice;
        }

        if (null !== $this->marketPrice) {
            $res['MarketPrice'] = null !== $this->marketPrice ? $this->marketPrice->toArray($noStream) : $this->marketPrice;
        }

        if (null !== $this->stock) {
            $res['Stock'] = $this->stock;
        }

        if (null !== $this->suggestedPrice) {
            $res['SuggestedPrice'] = null !== $this->suggestedPrice ? $this->suggestedPrice->toArray($noStream) : $this->suggestedPrice;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['DistributionPrice'])) {
            $model->distributionPrice = distributionPrice::fromMap($map['DistributionPrice']);
        }

        if (isset($map['MarketPrice'])) {
            $model->marketPrice = marketPrice::fromMap($map['MarketPrice']);
        }

        if (isset($map['Stock'])) {
            $model->stock = $map['Stock'];
        }

        if (isset($map['SuggestedPrice'])) {
            $model->suggestedPrice = suggestedPrice::fromMap($map['SuggestedPrice']);
        }

        return $model;
    }
}
