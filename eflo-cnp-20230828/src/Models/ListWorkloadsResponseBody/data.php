<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponseBody\data\paramSettings;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponseBody\data\staticConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 90
     *
     * @var int
     */
    public $defaultCpuPerWorker;

    /**
     * @example 8
     *
     * @var int
     */
    public $defaultGpuPerWorker;

    /**
     * @example 500
     *
     * @var int
     */
    public $defaultMemoryPerWorker;

    /**
     * @example 500
     *
     * @var int
     */
    public $defaultShareMemory;

    /**
     * @example AI
     *
     * @var string
     */
    public $family;

    /**
     * @example PyTorchJob
     *
     * @var string
     */
    public $jobKind;

    /**
     * @var paramSettings[]
     */
    public $paramSettings;

    /**
     * @example NLP-LLM
     *
     * @var string
     */
    public $scene;

    /**
     * @example common
     *
     * @var string
     */
    public $scope;

    /**
     * @var staticConfig
     */
    public $staticConfig;

    /**
     * @example 1
     *
     * @var int
     */
    public $versionId;

    /**
     * @example test
     *
     * @var string
     */
    public $workloadDescription;

    /**
     * @example 13
     *
     * @var int
     */
    public $workloadId;

    /**
     * @example test
     *
     * @var string
     */
    public $workloadName;

    /**
     * @example AI
     *
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'defaultCpuPerWorker'    => 'DefaultCpuPerWorker',
        'defaultGpuPerWorker'    => 'DefaultGpuPerWorker',
        'defaultMemoryPerWorker' => 'DefaultMemoryPerWorker',
        'defaultShareMemory'     => 'DefaultShareMemory',
        'family'                 => 'Family',
        'jobKind'                => 'JobKind',
        'paramSettings'          => 'ParamSettings',
        'scene'                  => 'Scene',
        'scope'                  => 'Scope',
        'staticConfig'           => 'StaticConfig',
        'versionId'              => 'VersionId',
        'workloadDescription'    => 'WorkloadDescription',
        'workloadId'             => 'WorkloadId',
        'workloadName'           => 'WorkloadName',
        'workloadType'           => 'WorkloadType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ParamSettings'] = [];
            if (null !== $this->paramSettings && \is_array($this->paramSettings)) {
                $n = 0;
                foreach ($this->paramSettings as $item) {
                    $res['ParamSettings'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['StaticConfig'] = null !== $this->staticConfig ? $this->staticConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                    = 0;
                foreach ($map['ParamSettings'] as $item) {
                    $model->paramSettings[$n++] = null !== $item ? paramSettings::fromMap($item) : $item;
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
