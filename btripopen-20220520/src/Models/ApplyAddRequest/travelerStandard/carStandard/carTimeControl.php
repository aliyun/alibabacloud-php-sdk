<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard\carTimeControl\timeLimit;

class carTimeControl extends Model
{
    /**
     * @var timeLimit[]
     */
    public $timeLimit;

    /**
     * @var bool
     */
    public $timeSwitch;
    protected $_name = [
        'timeLimit' => 'time_limit',
        'timeSwitch' => 'time_switch',
    ];

    public function validate()
    {
        if (\is_array($this->timeLimit)) {
            Model::validateArray($this->timeLimit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeLimit) {
            if (\is_array($this->timeLimit)) {
                $res['time_limit'] = [];
                $n1 = 0;
                foreach ($this->timeLimit as $item1) {
                    $res['time_limit'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeSwitch) {
            $res['time_switch'] = $this->timeSwitch;
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
        if (isset($map['time_limit'])) {
            if (!empty($map['time_limit'])) {
                $model->timeLimit = [];
                $n1 = 0;
                foreach ($map['time_limit'] as $item1) {
                    $model->timeLimit[$n1] = timeLimit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['time_switch'])) {
            $model->timeSwitch = $map['time_switch'];
        }

        return $model;
    }
}
