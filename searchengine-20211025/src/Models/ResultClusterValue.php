<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ResultClusterValue extends Model
{
    /**
     * @var int
     */
    public $buildParallelNum;

    /**
     * @var int
     */
    public $mergeParallelNum;
    protected $_name = [
        'buildParallelNum' => 'buildParallelNum',
        'mergeParallelNum' => 'mergeParallelNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
