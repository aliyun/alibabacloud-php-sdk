<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class RescaleApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

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

    /**
     * @var int
     */
    public $replicas;
    protected $_name = [
        'appId' => 'AppId',
        'autoEnableApplicationScalingRule' => 'AutoEnableApplicationScalingRule',
        'minReadyInstanceRatio' => 'MinReadyInstanceRatio',
        'minReadyInstances' => 'MinReadyInstances',
        'replicas' => 'Replicas',
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

        if (null !== $this->autoEnableApplicationScalingRule) {
            $res['AutoEnableApplicationScalingRule'] = $this->autoEnableApplicationScalingRule;
        }

        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }

        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
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

        if (isset($map['AutoEnableApplicationScalingRule'])) {
            $model->autoEnableApplicationScalingRule = $map['AutoEnableApplicationScalingRule'];
        }

        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }

        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        return $model;
    }
}
