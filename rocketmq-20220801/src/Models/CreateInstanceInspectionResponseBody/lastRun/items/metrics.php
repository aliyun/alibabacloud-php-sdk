<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\lastRun\items;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var bool
     */
    public $bad;

    /**
     * @var bool
     */
    public $good;

    /**
     * @var string
     */
    public $k;

    /**
     * @var string
     */
    public $v;
    protected $_name = [
        'bad' => 'bad',
        'good' => 'good',
        'k' => 'k',
        'v' => 'v',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bad) {
            $res['bad'] = $this->bad;
        }

        if (null !== $this->good) {
            $res['good'] = $this->good;
        }

        if (null !== $this->k) {
            $res['k'] = $this->k;
        }

        if (null !== $this->v) {
            $res['v'] = $this->v;
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
        if (isset($map['bad'])) {
            $model->bad = $map['bad'];
        }

        if (isset($map['good'])) {
            $model->good = $map['good'];
        }

        if (isset($map['k'])) {
            $model->k = $map['k'];
        }

        if (isset($map['v'])) {
            $model->v = $map['v'];
        }

        return $model;
    }
}
