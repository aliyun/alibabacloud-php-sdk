<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedFlexibleResource;

use AlibabaCloud\Tea\Model;

class supportedElasticIOResource extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $maxCount;

    /**
     * @example 0
     *
     * @var string
     */
    public $minCount;

    /**
     * @example 1
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
     * @return supportedElasticIOResource
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
