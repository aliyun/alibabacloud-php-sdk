<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AbbrevMonitorAlert extends Model
{
    /**
     * @var AbbrevMonitorAlertRule[]
     */
    public $abbrevMonitorAlertRules;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var MonitorNotifyStrategy
     */
    public $monitorNotifyStrategy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pbcId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $serviceGroupId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'abbrevMonitorAlertRules' => 'abbrevMonitorAlertRules',
        'condition' => 'condition',
        'env' => 'env',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'monitorNotifyStrategy' => 'monitorNotifyStrategy',
        'name' => 'name',
        'pbcId' => 'pbcId',
        'remark' => 'remark',
        'serviceGroupId' => 'serviceGroupId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->abbrevMonitorAlertRules)) {
            Model::validateArray($this->abbrevMonitorAlertRules);
        }
        if (null !== $this->monitorNotifyStrategy) {
            $this->monitorNotifyStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abbrevMonitorAlertRules) {
            if (\is_array($this->abbrevMonitorAlertRules)) {
                $res['abbrevMonitorAlertRules'] = [];
                $n1 = 0;
                foreach ($this->abbrevMonitorAlertRules as $item1) {
                    $res['abbrevMonitorAlertRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->monitorNotifyStrategy) {
            $res['monitorNotifyStrategy'] = null !== $this->monitorNotifyStrategy ? $this->monitorNotifyStrategy->toArray($noStream) : $this->monitorNotifyStrategy;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['abbrevMonitorAlertRules'])) {
            if (!empty($map['abbrevMonitorAlertRules'])) {
                $model->abbrevMonitorAlertRules = [];
                $n1 = 0;
                foreach ($map['abbrevMonitorAlertRules'] as $item1) {
                    $model->abbrevMonitorAlertRules[$n1] = AbbrevMonitorAlertRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['monitorNotifyStrategy'])) {
            $model->monitorNotifyStrategy = MonitorNotifyStrategy::fromMap($map['monitorNotifyStrategy']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
