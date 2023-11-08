<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateFineTuneJobRequest\hyperParameters;
use AlibabaCloud\Tea\Model;

class CreateFineTuneJobRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098beee5_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example bailian-qwen-basic-v1
     *
     * @var string
     */
    public $baseModel;

    /**
     * @var hyperParameters
     */
    public $hyperParameters;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string[]
     */
    public $trainingFiles;

    /**
     * @var string
     */
    public $trainingType;

    /**
     * @var string[]
     */
    public $validationFiles;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'baseModel'       => 'BaseModel',
        'hyperParameters' => 'HyperParameters',
        'modelName'       => 'ModelName',
        'trainingFiles'   => 'TrainingFiles',
        'trainingType'    => 'TrainingType',
        'validationFiles' => 'ValidationFiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->baseModel) {
            $res['BaseModel'] = $this->baseModel;
        }
        if (null !== $this->hyperParameters) {
            $res['HyperParameters'] = null !== $this->hyperParameters ? $this->hyperParameters->toMap() : null;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->trainingFiles) {
            $res['TrainingFiles'] = $this->trainingFiles;
        }
        if (null !== $this->trainingType) {
            $res['TrainingType'] = $this->trainingType;
        }
        if (null !== $this->validationFiles) {
            $res['ValidationFiles'] = $this->validationFiles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFineTuneJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['BaseModel'])) {
            $model->baseModel = $map['BaseModel'];
        }
        if (isset($map['HyperParameters'])) {
            $model->hyperParameters = hyperParameters::fromMap($map['HyperParameters']);
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['TrainingFiles'])) {
            if (!empty($map['TrainingFiles'])) {
                $model->trainingFiles = $map['TrainingFiles'];
            }
        }
        if (isset($map['TrainingType'])) {
            $model->trainingType = $map['TrainingType'];
        }
        if (isset($map['ValidationFiles'])) {
            if (!empty($map['ValidationFiles'])) {
                $model->validationFiles = $map['ValidationFiles'];
            }
        }

        return $model;
    }
}
