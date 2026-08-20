<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody\data\calendarPriceStocks;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody\data\normalPriceStock;

class data extends Model
{
    /**
     * @var calendarPriceStocks[]
     */
    public $calendarPriceStocks;

    /**
     * @var normalPriceStock
     */
    public $normalPriceStock;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var int
     */
    public $stockType;
    protected $_name = [
        'calendarPriceStocks' => 'CalendarPriceStocks',
        'normalPriceStock' => 'NormalPriceStock',
        'productId' => 'ProductId',
        'stockType' => 'StockType',
    ];

    public function validate()
    {
        if (\is_array($this->calendarPriceStocks)) {
            Model::validateArray($this->calendarPriceStocks);
        }
        if (null !== $this->normalPriceStock) {
            $this->normalPriceStock->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calendarPriceStocks) {
            if (\is_array($this->calendarPriceStocks)) {
                $res['CalendarPriceStocks'] = [];
                $n1 = 0;
                foreach ($this->calendarPriceStocks as $item1) {
                    $res['CalendarPriceStocks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalPriceStock) {
            $res['NormalPriceStock'] = null !== $this->normalPriceStock ? $this->normalPriceStock->toArray($noStream) : $this->normalPriceStock;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->stockType) {
            $res['StockType'] = $this->stockType;
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
        if (isset($map['CalendarPriceStocks'])) {
            if (!empty($map['CalendarPriceStocks'])) {
                $model->calendarPriceStocks = [];
                $n1 = 0;
                foreach ($map['CalendarPriceStocks'] as $item1) {
                    $model->calendarPriceStocks[$n1] = calendarPriceStocks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalPriceStock'])) {
            $model->normalPriceStock = normalPriceStock::fromMap($map['NormalPriceStock']);
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['StockType'])) {
            $model->stockType = $map['StockType'];
        }

        return $model;
    }
}
