<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\items;

use AlibabaCloud\Dara\Model;

class steps extends Model
{
    /**
     * @var int
     */
    public $begin;

    /**
     * @var int
     */
    public $end;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'begin' => 'Begin',
        'end' => 'End',
        'price' => 'Price',
        'regionIds' => 'RegionIds',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
