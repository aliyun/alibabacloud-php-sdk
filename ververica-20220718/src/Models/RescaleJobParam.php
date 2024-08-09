<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class RescaleJobParam extends Model
{
    /**
     * @var int
     */
    public $jobParallelism;

    /**
     * @var mixed[]
     */
    public $vertexParallelism;
    protected $_name = [
        'jobParallelism'    => 'jobParallelism',
        'vertexParallelism' => 'vertexParallelism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobParallelism) {
            $res['jobParallelism'] = $this->jobParallelism;
        }
        if (null !== $this->vertexParallelism) {
            $res['vertexParallelism'] = $this->vertexParallelism;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RescaleJobParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobParallelism'])) {
            $model->jobParallelism = $map['jobParallelism'];
        }
        if (isset($map['vertexParallelism'])) {
            $model->vertexParallelism = $map['vertexParallelism'];
        }

        return $model;
    }
}
