<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\items;

use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $begin;

    /**
     * @example 10000
     *
     * @var int
     */
    public $end;

    /**
     * @example 0.0001
     *
     * @var float
     */
    public $price;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @example 核*秒
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'begin'     => 'Begin',
        'end'       => 'End',
        'price'     => 'Price',
        'regionIds' => 'RegionIds',
        'unit'      => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return steps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = $map['RegionIds'];
            }
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
