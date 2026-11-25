<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class QuotaUsage extends Model
{
    /**
     * @var float
     */
    public $cpuCores;

    /**
     * @var int
     */
    public $createSandboxWithSnapshotConcurrency;

    /**
     * @var int
     */
    public $createSnapshotConcurrency;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var float
     */
    public $memoryGB;

    /**
     * @var int
     */
    public $pauseConcurrency;

    /**
     * @var int
     */
    public $resumeConcurrency;

    /**
     * @var float
     */
    public $scalingCpuCoresPerMinute;
    protected $_name = [
        'cpuCores' => 'cpuCores',
        'createSandboxWithSnapshotConcurrency' => 'createSandboxWithSnapshotConcurrency',
        'createSnapshotConcurrency' => 'createSnapshotConcurrency',
        'instanceCount' => 'instanceCount',
        'memoryGB' => 'memoryGB',
        'pauseConcurrency' => 'pauseConcurrency',
        'resumeConcurrency' => 'resumeConcurrency',
        'scalingCpuCoresPerMinute' => 'scalingCpuCoresPerMinute',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['cpuCores'] = $this->cpuCores;
        }

        if (null !== $this->createSandboxWithSnapshotConcurrency) {
            $res['createSandboxWithSnapshotConcurrency'] = $this->createSandboxWithSnapshotConcurrency;
        }

        if (null !== $this->createSnapshotConcurrency) {
            $res['createSnapshotConcurrency'] = $this->createSnapshotConcurrency;
        }

        if (null !== $this->instanceCount) {
            $res['instanceCount'] = $this->instanceCount;
        }

        if (null !== $this->memoryGB) {
            $res['memoryGB'] = $this->memoryGB;
        }

        if (null !== $this->pauseConcurrency) {
            $res['pauseConcurrency'] = $this->pauseConcurrency;
        }

        if (null !== $this->resumeConcurrency) {
            $res['resumeConcurrency'] = $this->resumeConcurrency;
        }

        if (null !== $this->scalingCpuCoresPerMinute) {
            $res['scalingCpuCoresPerMinute'] = $this->scalingCpuCoresPerMinute;
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
        if (isset($map['cpuCores'])) {
            $model->cpuCores = $map['cpuCores'];
        }

        if (isset($map['createSandboxWithSnapshotConcurrency'])) {
            $model->createSandboxWithSnapshotConcurrency = $map['createSandboxWithSnapshotConcurrency'];
        }

        if (isset($map['createSnapshotConcurrency'])) {
            $model->createSnapshotConcurrency = $map['createSnapshotConcurrency'];
        }

        if (isset($map['instanceCount'])) {
            $model->instanceCount = $map['instanceCount'];
        }

        if (isset($map['memoryGB'])) {
            $model->memoryGB = $map['memoryGB'];
        }

        if (isset($map['pauseConcurrency'])) {
            $model->pauseConcurrency = $map['pauseConcurrency'];
        }

        if (isset($map['resumeConcurrency'])) {
            $model->resumeConcurrency = $map['resumeConcurrency'];
        }

        if (isset($map['scalingCpuCoresPerMinute'])) {
            $model->scalingCpuCoresPerMinute = $map['scalingCpuCoresPerMinute'];
        }

        return $model;
    }
}
