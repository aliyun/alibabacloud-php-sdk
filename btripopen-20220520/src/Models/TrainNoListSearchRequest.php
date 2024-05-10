<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchRequest\option;
use AlibabaCloud\Tea\Model;

class TrainNoListSearchRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $arrLocation;

    /**
     * @description This parameter is required.
     *
     * @example 2024-05-16
     *
     * @var string
     */
    public $depDate;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $depLocation;

    /**
     * @description This parameter is required.
     *
     * @var option
     */
    public $option;

    /**
     * @example null
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'arrLocation' => 'arr_location',
        'depDate'     => 'dep_date',
        'depLocation' => 'dep_location',
        'option'      => 'option',
        'orderId'     => 'order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrLocation) {
            $res['arr_location'] = $this->arrLocation;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->depLocation) {
            $res['dep_location'] = $this->depLocation;
        }
        if (null !== $this->option) {
            $res['option'] = null !== $this->option ? $this->option->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainNoListSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_location'])) {
            $model->arrLocation = $map['arr_location'];
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['dep_location'])) {
            $model->depLocation = $map['dep_location'];
        }
        if (isset($map['option'])) {
            $model->option = option::fromMap($map['option']);
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        return $model;
    }
}
