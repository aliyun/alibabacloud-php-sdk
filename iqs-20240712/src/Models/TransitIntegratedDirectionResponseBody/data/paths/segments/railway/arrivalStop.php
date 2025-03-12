<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway;

use AlibabaCloud\Tea\Model;

class arrivalStop extends Model
{
    /**
     * @example 023
     *
     * @var string
     */
    public $adcode;

    /**
     * @description end
     *
     * @example 1699410466578
     *
     * @var string
     */
    public $end;

    /**
     * @example 8234837534
     *
     * @var string
     */
    public $id;

    /**
     * @example 101.45625135633681,25.08939480251736
     *
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2024-10-28 10:10:32
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
