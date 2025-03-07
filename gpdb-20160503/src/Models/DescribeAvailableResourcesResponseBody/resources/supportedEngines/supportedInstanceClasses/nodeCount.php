<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses;

use AlibabaCloud\Tea\Model;

class nodeCount extends Model
{
    /**
     * @description The maximum number of compute nodes.
     *
     * @example 256
     *
     * @var string
     */
    public $maxCount;

    /**
     * @description The minimum number of compute nodes.
     *
     * @example 4
     *
     * @var string
     */
    public $minCount;

    /**
     * @description The step size for adding compute nodes.
     *
     * For example, if the value of this parameter is 4, compute nodes must be added by multiples of 4.
     * @example 4
     *
     * @var string
     */
    public $step;
    protected $_name = [
        'maxCount' => 'MaxCount',
        'minCount' => 'MinCount',
        'step'     => 'Step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
