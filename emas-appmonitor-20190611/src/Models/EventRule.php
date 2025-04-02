<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;

class EventRule extends Model
{
    /**
     * @var ConditionalRule[]
     */
    public $conditional;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var float
     */
    public $sampleRate;
    protected $_name = [
        'conditional' => 'Conditional',
        'enable' => 'Enable',
        'eventId' => 'EventId',
        'modifyTime' => 'ModifyTime',
        'operator' => 'Operator',
        'sampleRate' => 'SampleRate',
    ];

    public function validate()
    {
        if (\is_array($this->conditional)) {
            Model::validateArray($this->conditional);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditional) {
            if (\is_array($this->conditional)) {
                $res['Conditional'] = [];
                $n1 = 0;
                foreach ($this->conditional as $item1) {
                    $res['Conditional'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
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
        if (isset($map['Conditional'])) {
            if (!empty($map['Conditional'])) {
                $model->conditional = [];
                $n1 = 0;
                foreach ($map['Conditional'] as $item1) {
                    $model->conditional[$n1++] = ConditionalRule::fromMap($item1);
                }
            }
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        return $model;
    }
}
