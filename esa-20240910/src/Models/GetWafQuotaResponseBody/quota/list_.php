<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\QuotaListItemsValue;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var QuotaListItemsValue[]
     */
    public $items;

    /**
     * @var WafQuotaInteger
     */
    public $numberItemsPerList;

    /**
     * @var WafQuotaInteger
     */
    public $numberItemsTotal;

    /**
     * @var WafQuotaInteger
     */
    public $numberTotal;
    protected $_name = [
        'enable' => 'Enable',
        'items' => 'Items',
        'numberItemsPerList' => 'NumberItemsPerList',
        'numberItemsTotal' => 'NumberItemsTotal',
        'numberTotal' => 'NumberTotal',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->numberItemsPerList) {
            $this->numberItemsPerList->validate();
        }
        if (null !== $this->numberItemsTotal) {
            $this->numberItemsTotal->validate();
        }
        if (null !== $this->numberTotal) {
            $this->numberTotal->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                foreach ($this->items as $key1 => $value1) {
                    $res['Items'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->numberItemsPerList) {
            $res['NumberItemsPerList'] = null !== $this->numberItemsPerList ? $this->numberItemsPerList->toArray($noStream) : $this->numberItemsPerList;
        }

        if (null !== $this->numberItemsTotal) {
            $res['NumberItemsTotal'] = null !== $this->numberItemsTotal ? $this->numberItemsTotal->toArray($noStream) : $this->numberItemsTotal;
        }

        if (null !== $this->numberTotal) {
            $res['NumberTotal'] = null !== $this->numberTotal ? $this->numberTotal->toArray($noStream) : $this->numberTotal;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                foreach ($map['Items'] as $key1 => $value1) {
                    $model->items[$key1] = QuotaListItemsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['NumberItemsPerList'])) {
            $model->numberItemsPerList = WafQuotaInteger::fromMap($map['NumberItemsPerList']);
        }

        if (isset($map['NumberItemsTotal'])) {
            $model->numberItemsTotal = WafQuotaInteger::fromMap($map['NumberItemsTotal']);
        }

        if (isset($map['NumberTotal'])) {
            $model->numberTotal = WafQuotaInteger::fromMap($map['NumberTotal']);
        }

        return $model;
    }
}
