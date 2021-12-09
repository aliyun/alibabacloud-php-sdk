<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class CreateInferenceServerRequest extends Model
{
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $modelPath;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $testId;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'functionName' => 'FunctionName',
        'modelPath'    => 'ModelPath',
        'modelType'    => 'ModelType',
        'pipelineId'   => 'PipelineId',
        'testId'       => 'TestId',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInferenceServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['ModelPath'])) {
            $model->modelPath = $map['ModelPath'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
