<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowTransition extends Model
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
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $p50;

    /**
     * @var float
     */
    public $p90;

    /**
     * @var float
     */
    public $p99;

    /**
     * @var RLFlowSlowestItem[]
     */
    public $slowest;
    protected $_name = [
        'avg' => 'Avg',
        'count' => 'Count',
        'key' => 'Key',
        'label' => 'Label',
        'max' => 'Max',
        'p50' => 'P50',
        'p90' => 'P90',
        'p99' => 'P99',
        'slowest' => 'Slowest',
    ];

    public function validate()
    {
        if (\is_array($this->slowest)) {
            Model::validateArray($this->slowest);
        }
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

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
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

        if (null !== $this->p99) {
            $res['P99'] = $this->p99;
        }

        if (null !== $this->slowest) {
            if (\is_array($this->slowest)) {
                $res['Slowest'] = [];
                $n1 = 0;
                foreach ($this->slowest as $item1) {
                    $res['Slowest'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
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

        if (isset($map['P99'])) {
            $model->p99 = $map['P99'];
        }

        if (isset($map['Slowest'])) {
            if (!empty($map['Slowest'])) {
                $model->slowest = [];
                $n1 = 0;
                foreach ($map['Slowest'] as $item1) {
                    $model->slowest[$n1] = RLFlowSlowestItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
