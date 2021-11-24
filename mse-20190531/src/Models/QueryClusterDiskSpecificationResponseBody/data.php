<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDiskSpecificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
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
     * @return data
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
