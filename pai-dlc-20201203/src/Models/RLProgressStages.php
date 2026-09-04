<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressStages extends Model
{
    /**
     * @var int
     */
    public $currentIndex;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var RLProgressStage[]
     */
    public $stages;

    /**
     * @var bool
     */
    public $stepDone;
    protected $_name = [
        'currentIndex' => 'CurrentIndex',
        'mode' => 'Mode',
        'stages' => 'Stages',
        'stepDone' => 'StepDone',
    ];

    public function validate()
    {
        if (\is_array($this->stages)) {
            Model::validateArray($this->stages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentIndex) {
            $res['CurrentIndex'] = $this->currentIndex;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->stages) {
            if (\is_array($this->stages)) {
                $res['Stages'] = [];
                $n1 = 0;
                foreach ($this->stages as $item1) {
                    $res['Stages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stepDone) {
            $res['StepDone'] = $this->stepDone;
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
        if (isset($map['CurrentIndex'])) {
            $model->currentIndex = $map['CurrentIndex'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Stages'])) {
            if (!empty($map['Stages'])) {
                $model->stages = [];
                $n1 = 0;
                foreach ($map['Stages'] as $item1) {
                    $model->stages[$n1] = RLProgressStage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StepDone'])) {
            $model->stepDone = $map['StepDone'];
        }

        return $model;
    }
}
