<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanTemplateResponseBody\data\templatePipelineParam\envParams;

class templatePipelineParam extends Model
{
    /**
     * @var envParams
     */
    public $envParams;

    /**
     * @var int
     */
    public $pipelineOrder;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string[]
     */
    public $settingParams;

    /**
     * @var int
     */
    public $workloadId;

    /**
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'envParams' => 'EnvParams',
        'pipelineOrder' => 'PipelineOrder',
        'scene' => 'Scene',
        'settingParams' => 'SettingParams',
        'workloadId' => 'WorkloadId',
        'workloadName' => 'WorkloadName',
    ];

    public function validate()
    {
        if (null !== $this->envParams) {
            $this->envParams->validate();
        }
        if (\is_array($this->settingParams)) {
            Model::validateArray($this->settingParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envParams) {
            $res['EnvParams'] = null !== $this->envParams ? $this->envParams->toArray($noStream) : $this->envParams;
        }

        if (null !== $this->pipelineOrder) {
            $res['PipelineOrder'] = $this->pipelineOrder;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->settingParams) {
            if (\is_array($this->settingParams)) {
                $res['SettingParams'] = [];
                foreach ($this->settingParams as $key1 => $value1) {
                    $res['SettingParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
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
            if (!empty($map['SettingParams'])) {
                $model->settingParams = [];
                foreach ($map['SettingParams'] as $key1 => $value1) {
                    $model->settingParams[$key1] = $value1;
                }
            }
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
