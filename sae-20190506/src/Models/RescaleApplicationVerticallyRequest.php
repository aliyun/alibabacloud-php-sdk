<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class RescaleApplicationVerticallyRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var bool
     */
    public $autoEnableApplicationScalingRule;

    /**
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @var int
     */
    public $minReadyInstances;
    protected $_name = [
        'appId' => 'AppId',
        'cpu' => 'Cpu',
        'memory' => 'Memory',
        'autoEnableApplicationScalingRule' => 'autoEnableApplicationScalingRule',
        'minReadyInstanceRatio' => 'minReadyInstanceRatio',
        'minReadyInstances' => 'minReadyInstances',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->autoEnableApplicationScalingRule) {
            $res['autoEnableApplicationScalingRule'] = $this->autoEnableApplicationScalingRule;
        }

        if (null !== $this->minReadyInstanceRatio) {
            $res['minReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }

        if (null !== $this->minReadyInstances) {
            $res['minReadyInstances'] = $this->minReadyInstances;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['autoEnableApplicationScalingRule'])) {
            $model->autoEnableApplicationScalingRule = $map['autoEnableApplicationScalingRule'];
        }

        if (isset($map['minReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['minReadyInstanceRatio'];
        }

        if (isset($map['minReadyInstances'])) {
            $model->minReadyInstances = $map['minReadyInstances'];
        }

        return $model;
    }
}
