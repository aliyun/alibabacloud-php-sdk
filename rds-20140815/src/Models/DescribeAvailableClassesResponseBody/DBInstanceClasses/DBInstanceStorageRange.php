<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody\DBInstanceClasses;

use AlibabaCloud\Tea\Model;

class DBInstanceStorageRange extends Model
{
    /**
     * @description The maximum storage capacity that is supported for the instance. Unit: GB.
     *
     * @example 2000
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description The minimum storage capacity that is supported for the instance. Unit: GB.
     *
     * @example 5
     *
     * @var int
     */
    public $minValue;

    /**
     * @description The minimum step size at which you can adjust the storage capacity of the instance. The minimum step size is 5 GB.
     *
     * @example 5
     *
     * @var int
     */
    public $step;
    protected $_name = [
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'step'     => 'Step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceStorageRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
