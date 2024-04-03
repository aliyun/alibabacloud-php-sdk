<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataItemListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The identifier of the data item.
     *
     * @example item_code
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the data item.
     *
     * @example name_bbb
     *
     * @var string
     */
    public $name;

    /**
     * @description Data filling method, 1: monthly value 2: annual value.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The data item unit.
     *
     * @example kg
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'code'   => 'code',
        'name'   => 'name',
        'period' => 'period',
        'unit'   => 'unit',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
