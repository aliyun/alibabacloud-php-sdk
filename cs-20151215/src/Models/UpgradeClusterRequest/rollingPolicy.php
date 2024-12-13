<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest;

use AlibabaCloud\Tea\Model;

class rollingPolicy extends Model
{
    /**
     * @description The maximum size of each batch.
     *
     * @example 3
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
     * @return rollingPolicy
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
