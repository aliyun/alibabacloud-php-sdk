<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushItemDataRequest;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The data item code.
     *
     * @example xxx
     *
     * @var string
     */
    public $code;

    /**
     * @description The month.
     *
     * @example 1
     *
     * @var string
     */
    public $month;

    /**
     * @description The value of the data item.
     *
     * @example 1.11
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'code'  => 'code',
        'month' => 'month',
        'value' => 'value',
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
        if (null !== $this->month) {
            $res['month'] = $this->month;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['month'])) {
            $model->month = $map['month'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
