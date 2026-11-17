<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config\extensionConfig;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config\model_;

class config extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var extensionConfig
     */
    public $extensionConfig;

    /**
     * @var string
     */
    public $instructions;

    /**
     * @var int
     */
    public $maxIterations;

    /**
     * @var model_
     */
    public $model;
    protected $_name = [
        'agentType' => 'agentType',
        'apiName' => 'apiName',
        'extensionConfig' => 'extensionConfig',
        'instructions' => 'instructions',
        'maxIterations' => 'maxIterations',
        'model' => 'model',
    ];

    public function validate()
    {
        if (null !== $this->extensionConfig) {
            $this->extensionConfig->validate();
        }
        if (null !== $this->model) {
            $this->model->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['agentType'] = $this->agentType;
        }

        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->extensionConfig) {
            $res['extensionConfig'] = null !== $this->extensionConfig ? $this->extensionConfig->toArray($noStream) : $this->extensionConfig;
        }

        if (null !== $this->instructions) {
            $res['instructions'] = $this->instructions;
        }

        if (null !== $this->maxIterations) {
            $res['maxIterations'] = $this->maxIterations;
        }

        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toArray($noStream) : $this->model;
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
        if (isset($map['agentType'])) {
            $model->agentType = $map['agentType'];
        }

        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['extensionConfig'])) {
            $model->extensionConfig = extensionConfig::fromMap($map['extensionConfig']);
        }

        if (isset($map['instructions'])) {
            $model->instructions = $map['instructions'];
        }

        if (isset($map['maxIterations'])) {
            $model->maxIterations = $map['maxIterations'];
        }

        if (isset($map['model'])) {
            $model->model = model_::fromMap($map['model']);
        }

        return $model;
    }
}
