<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig\sources;
use AlibabaCloud\Tea\Model;

class pipelineConfig extends Model
{
    /**
     * @example schema: tb pipeline:   - name: 执行命令     stages:       - driven: AUTO         jobs:           - displayName: 执行命令             task: execution-component-production@10             identifier: \"10_1626147407245\"             templateType: task             templateSign: \"\"             templateBatchUpdate: \"N\"             extraInfo: \"\"             params:               version1: pre-jdk1.62               steps:                 - name: 执行命令                   stepType: exec-shell                   stepIdentifier: \"10_1626147407245__11_1626147407249\"                   command: |                     # input your command here                     echo hello,world!                   ARTIFACTS: \"\"                   JSONEncoding: true                   freeInTaskGroupModeFields:                     - ARTIFACTS                   source: 132504-sss_ddd_3mvJ               ENGINE_PIPELINE_NAME: \"${INPUTS.ENGINE_PIPELINE_NAME}\"               ENGINE_PIPELINE_ID: \"${INPUTS.ENGINE_PIPELINE_ID}\"               ENGINE_PIPELINE_INST_ID: \"${INPUTS.ENGINE_PIPELINE_INST_ID}\"               ENGINE_PIPELINE_INST_NUMBER: \"${INPUTS.ENGINE_PIPELINE_INST_NUMBER}\"               buildNodeGroup: K8S-4             plugins: []             output: []             freeInTaskGroupModeFields: []
     *
     * @var string
     */
    public $flow;

    /**
     * @example {}
     *
     * @var string
     */
    public $settings;

    /**
     * @var sources[]
     */
    public $sources;
    protected $_name = [
        'flow'     => 'flow',
        'settings' => 'settings',
        'sources'  => 'sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flow) {
            $res['flow'] = $this->flow;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->sources) {
            $res['sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flow'])) {
            $model->flow = $map['flow'];
        }
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }
        if (isset($map['sources'])) {
            if (!empty($map['sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
