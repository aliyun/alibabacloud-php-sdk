<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsRequest;

use AlibabaCloud\Tea\Model;

class rolloutPolicy extends Model
{
    /**
     * @description The maximum concurrency for batch patching. Minimum value: 1. The maximum value equals the number of nodes in the node pool.
     *
     * @example 1
     *
     * @var int
     */
    public $maxParallelism;
    protected $_name = [
        'maxParallelism' => 'max_parallelism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxParallelism) {
            $res['max_parallelism'] = $this->maxParallelism;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rolloutPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['max_parallelism'])) {
            $model->maxParallelism = $map['max_parallelism'];
        }

        return $model;
    }
}
