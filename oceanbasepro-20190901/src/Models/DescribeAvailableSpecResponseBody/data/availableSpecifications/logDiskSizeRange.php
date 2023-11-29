<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data\availableSpecifications;

use AlibabaCloud\Tea\Model;

class logDiskSizeRange extends Model
{
    /**
     * @example 4000
     *
     * @var int
     */
    public $max;

    /**
     * @example 100
     *
     * @var int
     */
    public $min;

    /**
     * @example 5
     *
     * @var int
     */
    public $step;
    protected $_name = [
        'max'  => 'Max',
        'min'  => 'Min',
        'step' => 'Step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logDiskSizeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
