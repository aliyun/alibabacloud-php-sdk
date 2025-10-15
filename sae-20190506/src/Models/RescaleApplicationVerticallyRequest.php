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
    public $diskSize;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $vSwitchId;

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
        'diskSize' => 'DiskSize',
        'memory' => 'Memory',
        'resourceType' => 'ResourceType',
        'vSwitchId' => 'VSwitchId',
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

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
