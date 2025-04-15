<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\apps;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\items;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\postPayItems;

class PriceEstimateOutput extends Model
{
    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var postPayItems[]
     */
    public $postPayItems;

    /**
     * @var float
     */
    public $postPayTotalPrice;

    /**
     * @var float
     */
    public $totalPrice;
    protected $_name = [
        'apps' => 'Apps',
        'items' => 'Items',
        'postPayItems' => 'PostPayItems',
        'postPayTotalPrice' => 'PostPayTotalPrice',
        'totalPrice' => 'TotalPrice',
    ];

    public function validate()
    {
        if (\is_array($this->apps)) {
            Model::validateArray($this->apps);
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (\is_array($this->postPayItems)) {
            Model::validateArray($this->postPayItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apps) {
            if (\is_array($this->apps)) {
                $res['Apps'] = [];
                $n1 = 0;
                foreach ($this->apps as $item1) {
                    $res['Apps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->postPayItems) {
            if (\is_array($this->postPayItems)) {
                $res['PostPayItems'] = [];
                $n1 = 0;
                foreach ($this->postPayItems as $item1) {
                    $res['PostPayItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->postPayTotalPrice) {
            $res['PostPayTotalPrice'] = $this->postPayTotalPrice;
        }

        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
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
        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n1 = 0;
                foreach ($map['Apps'] as $item1) {
                    $model->apps[$n1++] = apps::fromMap($item1);
                }
            }
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1++] = items::fromMap($item1);
                }
            }
        }

        if (isset($map['PostPayItems'])) {
            if (!empty($map['PostPayItems'])) {
                $model->postPayItems = [];
                $n1 = 0;
                foreach ($map['PostPayItems'] as $item1) {
                    $model->postPayItems[$n1++] = postPayItems::fromMap($item1);
                }
            }
        }

        if (isset($map['PostPayTotalPrice'])) {
            $model->postPayTotalPrice = $map['PostPayTotalPrice'];
        }

        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }

        return $model;
    }
}
