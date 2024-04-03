<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponseBody\data\actualEmissionList\items;
use AlibabaCloud\Tea\Model;

class actualEmissionList extends Model
{
    /**
     * @description Data item list.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The year.
     *
     * @example 2024
     *
     * @var string
     */
    public $year;
    protected $_name = [
        'items' => 'items',
        'year'  => 'year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->year) {
            $res['year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actualEmissionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['year'])) {
            $model->year = $map['year'];
        }

        return $model;
    }
}
