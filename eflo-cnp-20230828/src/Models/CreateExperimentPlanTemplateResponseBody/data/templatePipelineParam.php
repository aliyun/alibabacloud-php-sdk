<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateResponseBody\data;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateResponseBody\data\templatePipelineParam\envParams;
use AlibabaCloud\Tea\Model;

class templatePipelineParam extends Model
{
    /**
     * @var envParams
     */
    public $envParams;

    /**
     * @example 1
     *
     * @var int
     */
    public $pipelineOrder;

    /**
     * @example baseline
     *
     * @var string
     */
    public $scene;

    /**
     * @var string[]
     */
    public $settingParams;

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
    protected $_name = [
        'envParams'     => 'EnvParams',
        'pipelineOrder' => 'PipelineOrder',
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
     * @return templatePipelineParam
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
