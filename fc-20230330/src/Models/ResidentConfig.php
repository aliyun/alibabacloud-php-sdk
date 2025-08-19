<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ResidentConfig extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $poolId;
    protected $_name = [
        'count' => 'count',
        'poolId' => 'poolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->poolId) {
            $res['poolId'] = $this->poolId;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['poolId'])) {
            $model->poolId = $map['poolId'];
        }

        return $model;
    }
}
