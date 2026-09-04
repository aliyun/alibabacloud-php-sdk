<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowTurns extends Model
{
    /**
     * @var float
     */
    public $avg;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $p50;

    /**
     * @var int
     */
    public $p90;
    protected $_name = [
        'avg' => 'Avg',
        'count' => 'Count',
        'max' => 'Max',
        'p50' => 'P50',
        'p90' => 'P90',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avg) {
            $res['Avg'] = $this->avg;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->p50) {
            $res['P50'] = $this->p50;
        }

        if (null !== $this->p90) {
            $res['P90'] = $this->p90;
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
        if (isset($map['Avg'])) {
            $model->avg = $map['Avg'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['P50'])) {
            $model->p50 = $map['P50'];
        }

        if (isset($map['P90'])) {
            $model->p90 = $map['P90'];
        }

        return $model;
    }
}
