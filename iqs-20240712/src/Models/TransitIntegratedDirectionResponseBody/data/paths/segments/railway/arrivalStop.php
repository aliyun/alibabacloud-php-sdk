<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway;

use AlibabaCloud\Dara\Model;

class arrivalStop extends Model
{
    /**
     * @var string
     */
    public $adcode;

    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'adcode' => 'adcode',
        'end' => 'end',
        'id' => 'id',
        'location' => 'location',
        'name' => 'name',
        'time' => 'time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
