<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponseBody\data\paramSettings;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponseBody\data\staticConfig;

class data extends Model
{
    /**
     * @var int
     */
    public $defaultCpuPerWorker;

    /**
     * @var int
     */
    public $defaultGpuPerWorker;

    /**
     * @var int
     */
    public $defaultMemoryPerWorker;

    /**
     * @var int
     */
    public $defaultShareMemory;

    /**
     * @var string
     */
    public $family;

    /**
     * @var string
     */
    public $jobKind;

    /**
     * @var paramSettings[]
     */
    public $paramSettings;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var staticConfig
     */
    public $staticConfig;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $workloadDescription;

    /**
     * @var int
     */
    public $workloadId;

    /**
     * @var string
     */
    public $workloadName;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'defaultCpuPerWorker' => 'DefaultCpuPerWorker',
        'defaultGpuPerWorker' => 'DefaultGpuPerWorker',
        'defaultMemoryPerWorker' => 'DefaultMemoryPerWorker',
        'defaultShareMemory' => 'DefaultShareMemory',
        'family' => 'Family',
        'jobKind' => 'JobKind',
        'paramSettings' => 'ParamSettings',
        'scene' => 'Scene',
        'scope' => 'Scope',
        'staticConfig' => 'StaticConfig',
        'versionId' => 'VersionId',
        'workloadDescription' => 'WorkloadDescription',
        'workloadId' => 'WorkloadId',
        'workloadName' => 'WorkloadName',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
        if (\is_array($this->paramSettings)) {
            Model::validateArray($this->paramSettings);
        }
        if (null !== $this->staticConfig) {
            $this->staticConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultCpuPerWorker) {
            $res['DefaultCpuPerWorker'] = $this->defaultCpuPerWorker;
        }

        if (null !== $this->defaultGpuPerWorker) {
            $res['DefaultGpuPerWorker'] = $this->defaultGpuPerWorker;
        }

        if (null !== $this->defaultMemoryPerWorker) {
            $res['DefaultMemoryPerWorker'] = $this->defaultMemoryPerWorker;
        }

        if (null !== $this->defaultShareMemory) {
            $res['DefaultShareMemory'] = $this->defaultShareMemory;
        }

        if (null !== $this->family) {
            $res['Family'] = $this->family;
        }

        if (null !== $this->jobKind) {
            $res['JobKind'] = $this->jobKind;
        }

        if (null !== $this->paramSettings) {
            if (\is_array($this->paramSettings)) {
                $res['ParamSettings'] = [];
                $n1 = 0;
                foreach ($this->paramSettings as $item1) {
                    $res['ParamSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->staticConfig) {
            $res['StaticConfig'] = null !== $this->staticConfig ? $this->staticConfig->toArray($noStream) : $this->staticConfig;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->workloadDescription) {
            $res['WorkloadDescription'] = $this->workloadDescription;
        }

        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['DefaultCpuPerWorker'])) {
            $model->defaultCpuPerWorker = $map['DefaultCpuPerWorker'];
        }

        if (isset($map['DefaultGpuPerWorker'])) {
            $model->defaultGpuPerWorker = $map['DefaultGpuPerWorker'];
        }

        if (isset($map['DefaultMemoryPerWorker'])) {
            $model->defaultMemoryPerWorker = $map['DefaultMemoryPerWorker'];
        }

        if (isset($map['DefaultShareMemory'])) {
            $model->defaultShareMemory = $map['DefaultShareMemory'];
        }

        if (isset($map['Family'])) {
            $model->family = $map['Family'];
        }

        if (isset($map['JobKind'])) {
            $model->jobKind = $map['JobKind'];
        }

        if (isset($map['ParamSettings'])) {
            if (!empty($map['ParamSettings'])) {
                $model->paramSettings = [];
                $n1 = 0;
                foreach ($map['ParamSettings'] as $item1) {
                    $model->paramSettings[$n1++] = paramSettings::fromMap($item1);
                }
            }
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['StaticConfig'])) {
            $model->staticConfig = staticConfig::fromMap($map['StaticConfig']);
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['WorkloadDescription'])) {
            $model->workloadDescription = $map['WorkloadDescription'];
        }

        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }

        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
