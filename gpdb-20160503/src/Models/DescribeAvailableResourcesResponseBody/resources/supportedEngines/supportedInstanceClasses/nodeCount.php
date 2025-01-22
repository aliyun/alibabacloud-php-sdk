<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses;

use AlibabaCloud\Dara\Model;

class nodeCount extends Model
{
    /**
     * @var string
     */
    public $maxCount;
    /**
     * @var string
     */
    public $minCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
