<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\outputConfig;

class SubmitSmartClipTaskRequest extends Model
{
    /**
     * @var editingConfig
     */
    public $editingConfig;

    /**
     * @var string
     */
    public $extendParam;

    /**
     * @var inputConfig
     */
    public $inputConfig;

    /**
     * @var outputConfig
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'editingConfig' => 'EditingConfig',
        'extendParam' => 'ExtendParam',
        'inputConfig' => 'InputConfig',
        'outputConfig' => 'OutputConfig',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->editingConfig) {
            $this->editingConfig->validate();
        }
        if (null !== $this->inputConfig) {
            $this->inputConfig->validate();
        }
        if (null !== $this->outputConfig) {
            $this->outputConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = null !== $this->editingConfig ? $this->editingConfig->toArray($noStream) : $this->editingConfig;
        }

        if (null !== $this->extendParam) {
            $res['ExtendParam'] = $this->extendParam;
        }

        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toArray($noStream) : $this->inputConfig;
        }

        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toArray($noStream) : $this->outputConfig;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = editingConfig::fromMap($map['EditingConfig']);
        }

        if (isset($map['ExtendParam'])) {
            $model->extendParam = $map['ExtendParam'];
        }

        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
        }

        if (isset($map['OutputConfig'])) {
            $model->outputConfig = outputConfig::fromMap($map['OutputConfig']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
