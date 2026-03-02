<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorArmsAlertUpdateCmd extends Model
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
     * @var MonitorArmsAlertRule[]
     */
    public $monitorArmsAlertRules;

    /**
     * @var MonitorNotifyStrategy
     */
    public $monitorNotifyStrategy;
    protected $_name = [
        'condition' => 'condition',
        'id' => 'id',
        'monitorArmsAlertRules' => 'monitorArmsAlertRules',
        'monitorNotifyStrategy' => 'monitorNotifyStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->monitorArmsAlertRules)) {
            Model::validateArray($this->monitorArmsAlertRules);
        }
        if (null !== $this->monitorNotifyStrategy) {
            $this->monitorNotifyStrategy->validate();
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

        if (null !== $this->monitorArmsAlertRules) {
            if (\is_array($this->monitorArmsAlertRules)) {
                $res['monitorArmsAlertRules'] = [];
                $n1 = 0;
                foreach ($this->monitorArmsAlertRules as $item1) {
                    $res['monitorArmsAlertRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->monitorNotifyStrategy) {
            $res['monitorNotifyStrategy'] = null !== $this->monitorNotifyStrategy ? $this->monitorNotifyStrategy->toArray($noStream) : $this->monitorNotifyStrategy;
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

        if (isset($map['monitorArmsAlertRules'])) {
            if (!empty($map['monitorArmsAlertRules'])) {
                $model->monitorArmsAlertRules = [];
                $n1 = 0;
                foreach ($map['monitorArmsAlertRules'] as $item1) {
                    $model->monitorArmsAlertRules[$n1] = MonitorArmsAlertRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['monitorNotifyStrategy'])) {
            $model->monitorNotifyStrategy = MonitorNotifyStrategy::fromMap($map['monitorNotifyStrategy']);
        }

        return $model;
    }
}
