<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse\resources\supportedEngines\supportedInstanceClasses;

use AlibabaCloud\Tea\Model;

class nodeCount extends Model
{
    /**
     * @var string
     */
    public $minCount;

    /**
     * @var string
     */
    public $maxCount;

    /**
     * @var string
     */
    public $step;
    protected $_name = [
        'minCount' => 'MinCount',
        'maxCount' => 'MaxCount',
        'step'     => 'Step',
    ];

    public function validate()
    {
        Model::validateRequired('minCount', $this->minCount, true);
        Model::validateRequired('maxCount', $this->maxCount, true);
        Model::validateRequired('step', $this->step, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
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
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
