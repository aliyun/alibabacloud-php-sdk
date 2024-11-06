<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway;

use AlibabaCloud\Tea\Model;

class departureStop extends Model
{
    /**
     * @example 029
     *
     * @var string
     */
    public $adcode;

    /**
     * @example 100937
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
     * @example 1729440000000
     *
     * @var string
     */
    public $start;

    /**
     * @example 2024-09-30 10:04:13
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'adcode'   => 'adcode',
        'id'       => 'id',
        'location' => 'location',
        'name'     => 'name',
        'start'    => 'start',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return departureStop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adcode'])) {
            $model->adcode = $map['adcode'];
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
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
