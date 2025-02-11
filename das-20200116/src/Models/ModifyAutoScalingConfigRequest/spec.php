<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Dara\Model;

class spec extends Model
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var string
     */
    public $coolDownTime;
    /**
     * @var int
     */
    public $cpuUsageUpperThreshold;
    /**
     * @var bool
     */
    public $downgrade;
    /**
     * @var int
     */
    public $maxReadOnlyNodes;
    /**
     * @var string
     */
    public $maxSpec;
    /**
     * @var int
     */
    public $memUsageUpperThreshold;
    /**
     * @var string
     */
    public $observationWindowSize;
    /**
     * @var bool
     */
    public $upgrade;
    protected $_name = [
        'apply'                  => 'Apply',
        'coolDownTime'           => 'CoolDownTime',
        'cpuUsageUpperThreshold' => 'CpuUsageUpperThreshold',
        'downgrade'              => 'Downgrade',
        'maxReadOnlyNodes'       => 'MaxReadOnlyNodes',
        'maxSpec'                => 'MaxSpec',
        'memUsageUpperThreshold' => 'MemUsageUpperThreshold',
        'observationWindowSize'  => 'ObservationWindowSize',
        'upgrade'                => 'Upgrade',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apply) {
            $res['Apply'] = $this->apply;
        }

        if (null !== $this->coolDownTime) {
            $res['CoolDownTime'] = $this->coolDownTime;
        }

        if (null !== $this->cpuUsageUpperThreshold) {
            $res['CpuUsageUpperThreshold'] = $this->cpuUsageUpperThreshold;
        }

        if (null !== $this->downgrade) {
            $res['Downgrade'] = $this->downgrade;
        }

        if (null !== $this->maxReadOnlyNodes) {
            $res['MaxReadOnlyNodes'] = $this->maxReadOnlyNodes;
        }

        if (null !== $this->maxSpec) {
            $res['MaxSpec'] = $this->maxSpec;
        }

        if (null !== $this->memUsageUpperThreshold) {
            $res['MemUsageUpperThreshold'] = $this->memUsageUpperThreshold;
        }

        if (null !== $this->observationWindowSize) {
            $res['ObservationWindowSize'] = $this->observationWindowSize;
        }

        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
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
        if (isset($map['Apply'])) {
            $model->apply = $map['Apply'];
        }

        if (isset($map['CoolDownTime'])) {
            $model->coolDownTime = $map['CoolDownTime'];
        }

        if (isset($map['CpuUsageUpperThreshold'])) {
            $model->cpuUsageUpperThreshold = $map['CpuUsageUpperThreshold'];
        }

        if (isset($map['Downgrade'])) {
            $model->downgrade = $map['Downgrade'];
        }

        if (isset($map['MaxReadOnlyNodes'])) {
            $model->maxReadOnlyNodes = $map['MaxReadOnlyNodes'];
        }

        if (isset($map['MaxSpec'])) {
            $model->maxSpec = $map['MaxSpec'];
        }

        if (isset($map['MemUsageUpperThreshold'])) {
            $model->memUsageUpperThreshold = $map['MemUsageUpperThreshold'];
        }

        if (isset($map['ObservationWindowSize'])) {
            $model->observationWindowSize = $map['ObservationWindowSize'];
        }

        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }

        return $model;
    }
}
