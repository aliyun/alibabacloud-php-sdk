<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\apps;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\items;
use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\postPayItems;
use AlibabaCloud\Tea\Model;

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
     * @example 235.66
     *
     * @var float
     */
    public $postPayTotalPrice;

    /**
     * @example 235.66
     *
     * @var float
     */
    public $totalPrice;
    protected $_name = [
        'apps'              => 'Apps',
        'items'             => 'Items',
        'postPayItems'      => 'PostPayItems',
        'postPayTotalPrice' => 'PostPayTotalPrice',
        'totalPrice'        => 'TotalPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apps) {
            $res['Apps'] = [];
            if (null !== $this->apps && \is_array($this->apps)) {
                $n = 0;
                foreach ($this->apps as $item) {
                    $res['Apps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->postPayItems) {
            $res['PostPayItems'] = [];
            if (null !== $this->postPayItems && \is_array($this->postPayItems)) {
                $n = 0;
                foreach ($this->postPayItems as $item) {
                    $res['PostPayItems'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return PriceEstimateOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n           = 0;
                foreach ($map['Apps'] as $item) {
                    $model->apps[$n++] = null !== $item ? apps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PostPayItems'])) {
            if (!empty($map['PostPayItems'])) {
                $model->postPayItems = [];
                $n                   = 0;
                foreach ($map['PostPayItems'] as $item) {
                    $model->postPayItems[$n++] = null !== $item ? postPayItems::fromMap($item) : $item;
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
