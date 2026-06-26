<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CreateTimedResidentResourcePoolApplicationInput extends Model
{
    /**
     * @var string
     */
    public $associatedPoolId;

    /**
     * @var int
     */
    public $diskSizeInGB;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var int
     */
    public $memorySizeInGB;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $poolName;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var TimedPoolConfig
     */
    public $timedConfig;

    /**
     * @var string
     */
    public $timedPoolId;

    /**
     * @var int
     */
    public $totalGPUCards;

    /**
     * @var int
     */
    public $vCpuCores;
    protected $_name = [
        'associatedPoolId' => 'associatedPoolId',
        'diskSizeInGB' => 'diskSizeInGB',
        'gpuType' => 'gpuType',
        'memorySizeInGB' => 'memorySizeInGB',
        'operationType' => 'operationType',
        'poolName' => 'poolName',
        'reason' => 'reason',
        'timedConfig' => 'timedConfig',
        'timedPoolId' => 'timedPoolId',
        'totalGPUCards' => 'totalGPUCards',
        'vCpuCores' => 'vCpuCores',
    ];

    public function validate()
    {
        if (null !== $this->timedConfig) {
            $this->timedConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedPoolId) {
            $res['associatedPoolId'] = $this->associatedPoolId;
        }

        if (null !== $this->diskSizeInGB) {
            $res['diskSizeInGB'] = $this->diskSizeInGB;
        }

        if (null !== $this->gpuType) {
            $res['gpuType'] = $this->gpuType;
        }

        if (null !== $this->memorySizeInGB) {
            $res['memorySizeInGB'] = $this->memorySizeInGB;
        }

        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
        }

        if (null !== $this->poolName) {
            $res['poolName'] = $this->poolName;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->timedConfig) {
            $res['timedConfig'] = null !== $this->timedConfig ? $this->timedConfig->toArray($noStream) : $this->timedConfig;
        }

        if (null !== $this->timedPoolId) {
            $res['timedPoolId'] = $this->timedPoolId;
        }

        if (null !== $this->totalGPUCards) {
            $res['totalGPUCards'] = $this->totalGPUCards;
        }

        if (null !== $this->vCpuCores) {
            $res['vCpuCores'] = $this->vCpuCores;
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
        if (isset($map['associatedPoolId'])) {
            $model->associatedPoolId = $map['associatedPoolId'];
        }

        if (isset($map['diskSizeInGB'])) {
            $model->diskSizeInGB = $map['diskSizeInGB'];
        }

        if (isset($map['gpuType'])) {
            $model->gpuType = $map['gpuType'];
        }

        if (isset($map['memorySizeInGB'])) {
            $model->memorySizeInGB = $map['memorySizeInGB'];
        }

        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
        }

        if (isset($map['poolName'])) {
            $model->poolName = $map['poolName'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['timedConfig'])) {
            $model->timedConfig = TimedPoolConfig::fromMap($map['timedConfig']);
        }

        if (isset($map['timedPoolId'])) {
            $model->timedPoolId = $map['timedPoolId'];
        }

        if (isset($map['totalGPUCards'])) {
            $model->totalGPUCards = $map['totalGPUCards'];
        }

        if (isset($map['vCpuCores'])) {
            $model->vCpuCores = $map['vCpuCores'];
        }

        return $model;
    }
}
