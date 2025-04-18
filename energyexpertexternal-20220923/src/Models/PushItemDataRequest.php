<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushItemDataRequest\items;

class PushItemDataRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $year;
    protected $_name = [
        'code' => 'code',
        'items' => 'items',
        'year' => 'year',
    ];

    public function validate()
    {
        if (null !== $this->items) {
            $this->items->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->items) {
            $res['items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
        }

        if (null !== $this->year) {
            $res['year'] = $this->year;
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
