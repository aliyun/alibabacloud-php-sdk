<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\outputConfig;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var inputConfig
     */
    public $inputConfig;

    /**
     * @var outputConfig
     */
    public $outputConfig;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'editingConfig' => 'EditingConfig',
        'extendParam'   => 'ExtendParam',
        'inputConfig'   => 'InputConfig',
        'outputConfig'  => 'OutputConfig',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = null !== $this->editingConfig ? $this->editingConfig->toMap() : null;
        }
        if (null !== $this->extendParam) {
            $res['ExtendParam'] = $this->extendParam;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toMap() : null;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toMap() : null;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSmartClipTaskRequest
     */
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
