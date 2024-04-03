<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushItemDataRequest\items;
use AlibabaCloud\Tea\Model;

class PushItemDataRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * @example C-20210223-01
     *
     * @var string
     */
    public $code;

    /**
     * @description Push data list.
     *
     * @var items
     */
    public $items;

    /**
     * @description The year of the data created.
     *
     * @example 2024
     *
     * @var string
     */
    public $year;
    protected $_name = [
        'code'  => 'code',
        'items' => 'items',
        'year'  => 'year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->items) {
            $res['items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->year) {
            $res['year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushItemDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['items'])) {
            $model->items = items::fromMap($map['items']);
        }
        if (isset($map['year'])) {
            $model->year = $map['year'];
        }

        return $model;
    }
}
