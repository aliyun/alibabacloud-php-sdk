<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ShardingPolicy;

use AlibabaCloud\Dara\Model;

class shardHash extends Model
{
    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var int
     */
    public $maxHashCount;
    protected $_name = [
        'keys' => 'keys',
        'maxHashCount' => 'maxHashCount',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['keys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxHashCount) {
            $res['maxHashCount'] = $this->maxHashCount;
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
        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['keys'] as $item1) {
                    $model->keys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['maxHashCount'])) {
            $model->maxHashCount = $map['maxHashCount'];
        }

        return $model;
    }
}
