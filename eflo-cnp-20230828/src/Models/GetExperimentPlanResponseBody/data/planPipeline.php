<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponseBody\data;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponseBody\data\planPipeline\envParams;
use AlibabaCloud\Tea\Model;

class planPipeline extends Model
{
    /**
     * @description Configured environment parameters
     *
     * @var envParams
     */
    public $envParams;

    /**
     * @description Node order number
     *
     * @example 1
     *
     * @var int
     */
    public $pipelineOrder;

    /**
     * @description Resource ID
     *
     * @example 36
     *
     * @var int
     */
    public $resourceId;

    /**
     * @description Resource name
     *
     * @example PPU
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description Usage scenario, e.g., "baseline"
     *
     * @example baseline
     *
     * @var string
     */
    public $scene;

    /**
     * @description Configured workload parameters
     *
     * @var string[]
     */
    public $settingParams;

    /**
     * @description Workload ID
     *
     * @example 14
     *
     * @var int
     */
    public $workloadId;

    /**
     * @description Workload name
     *
     * @example test
     *
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'envParams'     => 'EnvParams',
        'pipelineOrder' => 'PipelineOrder',
        'resourceId'    => 'ResourceId',
        'resourceName'  => 'ResourceName',
        'scene'         => 'Scene',
        'settingParams' => 'SettingParams',
        'workloadId'    => 'WorkloadId',
        'workloadName'  => 'WorkloadName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envParams) {
            $res['EnvParams'] = null !== $this->envParams ? $this->envParams->toMap() : null;
        }
        if (null !== $this->pipelineOrder) {
            $res['PipelineOrder'] = $this->pipelineOrder;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->settingParams) {
            $res['SettingParams'] = $this->settingParams;
        }
        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }
        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planPipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvParams'])) {
            $model->envParams = envParams::fromMap($map['EnvParams']);
        }
        if (isset($map['PipelineOrder'])) {
            $model->pipelineOrder = $map['PipelineOrder'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SettingParams'])) {
            $model->settingParams = $map['SettingParams'];
        }
        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }
        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        return $model;
    }
}
