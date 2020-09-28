<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\op1Param;

use AlibabaCloud\Tea\Model;

class range extends Model
{
    /**
     * @var float
     */
    public $min;

    /**
     * @var float
     */
    public $max;
    protected $_name = [
        'min' => 'Min',
        'max' => 'Max',
    ];

    public function validate()
    {
        Model::validateRequired('min', $this->min, true);
        Model::validateRequired('max', $this->max, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return range
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        return $model;
    }
}
