<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\railway;

use AlibabaCloud\Tea\Model;

class departureStop extends Model
{
    /**
     * @example 1002200
     *
     * @var string
     */
    public $adcode;

    /**
     * @example 148100008
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
     * @example stop_words
     *
     * @var string
     */
    public $name;

    /**
     * @example 1727141356337
     *
     * @var string
     */
    public $start;

    /**
     * @example 2024-11-04 10:26:41
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
