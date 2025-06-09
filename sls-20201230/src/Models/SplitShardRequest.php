<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class SplitShardRequest extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $shardCount;
    protected $_name = [
        'key' => 'key',
        'shardCount' => 'shardCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->shardCount) {
            $res['shardCount'] = $this->shardCount;
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
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['shardCount'])) {
            $model->shardCount = $map['shardCount'];
        }

        return $model;
    }
}
