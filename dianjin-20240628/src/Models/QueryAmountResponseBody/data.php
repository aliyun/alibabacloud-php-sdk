<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\QueryAmountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryAmountResponseBody\data\items;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryAmountResponseBody\data\total;

class data extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $scopeNote;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var total
     */
    public $total;
    protected $_name = [
        'endDate' => 'endDate',
        'items' => 'items',
        'scopeNote' => 'scopeNote',
        'startDate' => 'startDate',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->total) {
            $this->total->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scopeNote) {
            $res['scopeNote'] = $this->scopeNote;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->total) {
            $res['total'] = null !== $this->total ? $this->total->toArray($noStream) : $this->total;
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
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['scopeNote'])) {
            $model->scopeNote = $map['scopeNote'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['total'])) {
            $model->total = total::fromMap($map['total']);
        }

        return $model;
    }
}
