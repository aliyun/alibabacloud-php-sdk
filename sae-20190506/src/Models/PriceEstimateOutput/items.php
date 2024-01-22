<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput;

use AlibabaCloud\SDK\Sae\V20190506\Models\PriceEstimateOutput\items\steps;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 3600.00
     *
     * @var float
     */
    public $amount;

    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example p_micro_service_cpu
     *
     * @var string
     */
    public $id;

    /**
     * @example 1.00
     *
     * @var float
     */
    public $price;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @example pack/post
     *
     * @var string
     */
    public $type;

    /**
     * @example 核*秒
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'amount' => 'Amount',
        'count'  => 'Count',
        'id'     => 'Id',
        'price'  => 'Price',
        'steps'  => 'Steps',
        'type'   => 'Type',
        'unit'   => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->steps) {
            $res['Steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['Steps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n            = 0;
                foreach ($map['Steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
