<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results;

use AlibabaCloud\Dara\Model;

class warningBoundList extends Model
{
    /**
     * @var int
     */
    public $iteration;

    /**
     * @var float
     */
    public $lower;

    /**
     * @var float
     */
    public $upper;
    protected $_name = [
        'iteration' => 'Iteration',
        'lower' => 'Lower',
        'upper' => 'Upper',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
