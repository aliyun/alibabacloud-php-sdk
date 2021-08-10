<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses;

use AlibabaCloud\Tea\Model;

class storageSize extends Model
{
    /**
     * @var string
     */
    public $step;

    /**
     * @var string
     */
    public $minCount;

    /**
     * @var string
     */
    public $maxCount;
    protected $_name = [
        'step'     => 'Step',
        'minCount' => 'MinCount',
        'maxCount' => 'MaxCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }

        return $model;
    }
}
