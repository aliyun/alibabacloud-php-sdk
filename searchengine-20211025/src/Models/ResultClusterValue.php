<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ResultClusterValue extends Model
{
    /**
     * @description The maximum number of full indexes that can be concurrently built.
     *
     * @example 2
     *
     * @var int
     */
    public $buildParallelNum;

    /**
     * @description The maximum number of full indexes that can be concurrently merged.
     *
     * @example 2
     *
     * @var int
     */
    public $mergeParallelNum;
    protected $_name = [
        'buildParallelNum' => 'buildParallelNum',
        'mergeParallelNum' => 'mergeParallelNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildParallelNum) {
            $res['buildParallelNum'] = $this->buildParallelNum;
        }
        if (null !== $this->mergeParallelNum) {
            $res['mergeParallelNum'] = $this->mergeParallelNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResultClusterValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildParallelNum'])) {
            $model->buildParallelNum = $map['buildParallelNum'];
        }
        if (isset($map['mergeParallelNum'])) {
            $model->mergeParallelNum = $map['mergeParallelNum'];
        }

        return $model;
    }
}
