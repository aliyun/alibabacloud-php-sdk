<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelineRunRequest extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example arguments:   parameters:   - name: "execution_maxcompute"     value:       endpoint: "http://service***"       odpsProject: "pai***"
     *
     * @var string
     */
    public $arguments;

    /**
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $noConfirmRequired;

    /**
     * @example {"mlflow":{"experimentId":"exp-1jdk***"}}
     *
     * @var string
     */
    public $options;

    /**
     * @example flow-rer7y***
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example apiVersion: "core/v1"*********
     *
     * @var string
     */
    public $pipelineManifest;

    /**
     * @example experiment-ybpy***
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example UNKNOWN
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 84***
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'     => 'Accessibility',
        'arguments'         => 'Arguments',
        'name'              => 'Name',
        'noConfirmRequired' => 'NoConfirmRequired',
        'options'           => 'Options',
        'pipelineId'        => 'PipelineId',
        'pipelineManifest'  => 'PipelineManifest',
        'sourceId'          => 'SourceId',
        'sourceType'        => 'SourceType',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->noConfirmRequired) {
            $res['NoConfirmRequired'] = $this->noConfirmRequired;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineManifest) {
            $res['PipelineManifest'] = $this->pipelineManifest;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NoConfirmRequired'])) {
            $model->noConfirmRequired = $map['NoConfirmRequired'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['PipelineManifest'])) {
            $model->pipelineManifest = $map['PipelineManifest'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
