<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveGroupPromInstance extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'id' => 'id',
        'kind' => 'kind',
        'region' => 'region',
        'time' => 'time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
