<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateAIAgentInstanceShrinkRequest extends Model
{
    /**
     * @description The ID of the AI agent that you want to update.
     *
     * This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The template configurations of the AI agent. The configurations are merged with the template configurations that are used to start the AI agent. For more information, see the definition of TemplateConfig.
     *
     * @var string
     */
    public $templateConfigShrink;

    /**
     * @example {"VoiceId":"xiaoxia"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'templateConfigShrink' => 'TemplateConfig',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->templateConfigShrink) {
            $res['TemplateConfig'] = $this->templateConfigShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAIAgentInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfigShrink = $map['TemplateConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
