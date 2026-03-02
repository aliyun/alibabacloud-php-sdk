<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorSlsAlertUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var int
     */
    public $id;

    /**
     * @var MonitorNotifyStrategy
     */
    public $monitorNotifyStrategy;

    /**
     * @var MonitorSlsAlertRule[]
     */
    public $monitorSlsAlertRules;
    protected $_name = [
        'condition' => 'condition',
        'id' => 'id',
        'monitorNotifyStrategy' => 'monitorNotifyStrategy',
        'monitorSlsAlertRules' => 'monitorSlsAlertRules',
    ];

    public function validate()
    {
        if (null !== $this->monitorNotifyStrategy) {
            $this->monitorNotifyStrategy->validate();
        }
        if (\is_array($this->monitorSlsAlertRules)) {
            Model::validateArray($this->monitorSlsAlertRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->monitorNotifyStrategy) {
            $res['monitorNotifyStrategy'] = null !== $this->monitorNotifyStrategy ? $this->monitorNotifyStrategy->toArray($noStream) : $this->monitorNotifyStrategy;
        }

        if (null !== $this->monitorSlsAlertRules) {
            if (\is_array($this->monitorSlsAlertRules)) {
                $res['monitorSlsAlertRules'] = [];
                $n1 = 0;
                foreach ($this->monitorSlsAlertRules as $item1) {
                    $res['monitorSlsAlertRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['monitorNotifyStrategy'])) {
            $model->monitorNotifyStrategy = MonitorNotifyStrategy::fromMap($map['monitorNotifyStrategy']);
        }

        if (isset($map['monitorSlsAlertRules'])) {
            if (!empty($map['monitorSlsAlertRules'])) {
                $model->monitorSlsAlertRules = [];
                $n1 = 0;
                foreach ($map['monitorSlsAlertRules'] as $item1) {
                    $model->monitorSlsAlertRules[$n1] = MonitorSlsAlertRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
