<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateWorkspaceRequest;

use AlibabaCloud\Dara\Model;

class gpuSubscription extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $gpuMachineNum;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $paymentDurationUnit;
    protected $_name = [
        'autoRenew' => 'autoRenew',
        'duration' => 'duration',
        'gpuMachineNum' => 'gpuMachineNum',
        'instanceId' => 'instanceId',
        'instanceTypeId' => 'instanceTypeId',
        'operation' => 'operation',
        'paymentDurationUnit' => 'paymentDurationUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->gpuMachineNum) {
            $res['gpuMachineNum'] = $this->gpuMachineNum;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceTypeId) {
            $res['instanceTypeId'] = $this->instanceTypeId;
        }

        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }

        if (null !== $this->paymentDurationUnit) {
            $res['paymentDurationUnit'] = $this->paymentDurationUnit;
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
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['gpuMachineNum'])) {
            $model->gpuMachineNum = $map['gpuMachineNum'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceTypeId'])) {
            $model->instanceTypeId = $map['instanceTypeId'];
        }

        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        if (isset($map['paymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['paymentDurationUnit'];
        }

        return $model;
    }
}
