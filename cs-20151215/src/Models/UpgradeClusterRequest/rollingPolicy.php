<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest;

use AlibabaCloud\Dara\Model;

class rollingPolicy extends Model
{
    /**
     * @var int
     */
    public $maxParallelism;
    protected $_name = [
        'maxParallelism' => 'max_parallelism',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxParallelism) {
            $res['max_parallelism'] = $this->maxParallelism;
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
        if (isset($map['max_parallelism'])) {
            $model->maxParallelism = $map['max_parallelism'];
        }

        return $model;
    }
}
