<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTrafficControlTasksResponseBody\trafficControlTasks\trafficControlTargets;

use AlibabaCloud\Dara\Model;

class splitParts extends Model
{
    /**
     * @var int[]
     */
    public $setValues;
    /**
     * @var int[]
     */
    public $timePoints;
    protected $_name = [
        'setValues'  => 'SetValues',
        'timePoints' => 'TimePoints',
    ];

    public function validate()
    {
        if (\is_array($this->setValues)) {
            Model::validateArray($this->setValues);
        }
        if (\is_array($this->timePoints)) {
            Model::validateArray($this->timePoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->setValues) {
            if (\is_array($this->setValues)) {
                $res['SetValues'] = [];
                $n1               = 0;
                foreach ($this->setValues as $item1) {
                    $res['SetValues'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->timePoints) {
            if (\is_array($this->timePoints)) {
                $res['TimePoints'] = [];
                $n1                = 0;
                foreach ($this->timePoints as $item1) {
                    $res['TimePoints'][$n1++] = $item1;
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
        if (isset($map['SetValues'])) {
            if (!empty($map['SetValues'])) {
                $model->setValues = [];
                $n1               = 0;
                foreach ($map['SetValues'] as $item1) {
                    $model->setValues[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TimePoints'])) {
            if (!empty($map['TimePoints'])) {
                $model->timePoints = [];
                $n1                = 0;
                foreach ($map['TimePoints'] as $item1) {
                    $model->timePoints[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
