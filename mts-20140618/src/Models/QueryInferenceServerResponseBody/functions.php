<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryInferenceServerResponseBody;

use AlibabaCloud\Tea\Model;

class functions extends Model
{
    /**
     * @var int
     */
    public $createTime;

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
     * @var int
     */
    public $userId;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'functionName' => 'FunctionName',
        'modelPath'    => 'ModelPath',
        'modelType'    => 'ModelType',
        'pipelineId'   => 'PipelineId',
        'testId'       => 'TestId',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
