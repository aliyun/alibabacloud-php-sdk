<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateAIAgentInstanceRequest extends Model
{
    /**
     * @description The ID of the AI agent that you want to update.
     *
     * This parameter is required.
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The template configurations of the AI agent. The configurations are merged with the template configurations that are used to start the AI agent. For more information, see the definition of TemplateConfig.
     *
     * @var AIAgentTemplateConfig
     */
    public $templateConfig;

    /**
     * @example {"VoiceId":"xiaoxia"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'templateConfig' => 'TemplateConfig',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAIAgentInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = AIAgentTemplateConfig::fromMap($map['TemplateConfig']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
