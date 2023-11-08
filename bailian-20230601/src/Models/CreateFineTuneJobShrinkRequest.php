<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class CreateFineTuneJobShrinkRequest extends Model
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
     * @var string
     */
    public $hyperParametersShrink;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $trainingFilesShrink;

    /**
     * @var string
     */
    public $trainingType;

    /**
     * @var string
     */
    public $validationFilesShrink;
    protected $_name = [
        'agentKey'              => 'AgentKey',
        'baseModel'             => 'BaseModel',
        'hyperParametersShrink' => 'HyperParameters',
        'modelName'             => 'ModelName',
        'trainingFilesShrink'   => 'TrainingFiles',
        'trainingType'          => 'TrainingType',
        'validationFilesShrink' => 'ValidationFiles',
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
        if (null !== $this->hyperParametersShrink) {
            $res['HyperParameters'] = $this->hyperParametersShrink;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->trainingFilesShrink) {
            $res['TrainingFiles'] = $this->trainingFilesShrink;
        }
        if (null !== $this->trainingType) {
            $res['TrainingType'] = $this->trainingType;
        }
        if (null !== $this->validationFilesShrink) {
            $res['ValidationFiles'] = $this->validationFilesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFineTuneJobShrinkRequest
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
            $model->hyperParametersShrink = $map['HyperParameters'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['TrainingFiles'])) {
            $model->trainingFilesShrink = $map['TrainingFiles'];
        }
        if (isset($map['TrainingType'])) {
            $model->trainingType = $map['TrainingType'];
        }
        if (isset($map['ValidationFiles'])) {
            $model->validationFilesShrink = $map['ValidationFiles'];
        }

        return $model;
    }
}
