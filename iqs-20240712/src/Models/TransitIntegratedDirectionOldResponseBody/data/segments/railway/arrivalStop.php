<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\railway;

use AlibabaCloud\Tea\Model;

class arrivalStop extends Model
{
    /**
     * @example 100200
     *
     * @var string
     */
    public $adcode;

    /**
     * @description end
     *
     * @example 1728553266042
     *
     * @var string
     */
    public $end;

    /**
     * @example 138700037
     *
     * @var string
     */
    public $id;

    /**
     * @example 116.467430,39.997627
     *
     * @var string
     */
    public $location;

    /**
     * @example 1634343014745990-1699252808337-stack_10340126_20231106144004.log
     *
     * @var string
     */
    public $name;

    /**
     * @example 2024-11-09 10:00:46
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'adcode'   => 'adcode',
        'end'      => 'end',
        'id'       => 'id',
        'location' => 'location',
        'name'     => 'name',
        'time'     => 'time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adcode) {
            $res['adcode'] = $this->adcode;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return arrivalStop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adcode'])) {
            $model->adcode = $map['adcode'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
