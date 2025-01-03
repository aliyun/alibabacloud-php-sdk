<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results;

use AlibabaCloud\Tea\Model;

class warningBoundList extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $iteration;

    /**
     * @description LOWER
     *
     * @example 14
     *
     * @var float
     */
    public $lower;

    /**
     * @description UPPER
     *
     * @example 56
     *
     * @var float
     */
    public $upper;
    protected $_name = [
        'iteration' => 'Iteration',
        'lower'     => 'Lower',
        'upper'     => 'Upper',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iteration) {
            $res['Iteration'] = $this->iteration;
        }
        if (null !== $this->lower) {
            $res['Lower'] = $this->lower;
        }
        if (null !== $this->upper) {
            $res['Upper'] = $this->upper;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningBoundList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iteration'])) {
            $model->iteration = $map['Iteration'];
        }
        if (isset($map['Lower'])) {
            $model->lower = $map['Lower'];
        }
        if (isset($map['Upper'])) {
            $model->upper = $map['Upper'];
        }

        return $model;
    }
}
