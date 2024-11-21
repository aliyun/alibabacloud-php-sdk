<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota;

use AlibabaCloud\SDK\ESA\V20240910\Models\QuotaListItemsValue;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description Indicates whether custom lists are enabled.
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The quota information about all item types in the custom lists.
     *
     * @var QuotaListItemsValue[]
     */
    public $items;

    /**
     * @description The maximum number of items in each custom list.
     *
     * @var WafQuotaInteger
     */
    public $numberItemsPerList;

    /**
     * @description The maximum number of items in all custom lists.
     *
     * @var WafQuotaInteger
     */
    public $numberItemsTotal;

    /**
     * @description The maximum number of custom lists.
     *
     * @var WafQuotaInteger
     */
    public $numberTotal;
    protected $_name = [
        'enable'             => 'Enable',
        'items'              => 'Items',
        'numberItemsPerList' => 'NumberItemsPerList',
        'numberItemsTotal'   => 'NumberItemsTotal',
        'numberTotal'        => 'NumberTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                foreach ($this->items as $key => $val) {
                    $res['Items'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->numberItemsPerList) {
            $res['NumberItemsPerList'] = null !== $this->numberItemsPerList ? $this->numberItemsPerList->toMap() : null;
        }
        if (null !== $this->numberItemsTotal) {
            $res['NumberItemsTotal'] = null !== $this->numberItemsTotal ? $this->numberItemsTotal->toMap() : null;
        }
        if (null !== $this->numberTotal) {
            $res['NumberTotal'] = null !== $this->numberTotal ? $this->numberTotal->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Items'])) {
            $model->items = $map['Items'];
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
