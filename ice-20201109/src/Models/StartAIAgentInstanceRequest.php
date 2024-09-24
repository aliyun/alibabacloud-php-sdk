<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class StartAIAgentInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $AIAgentId;

    /**
     * @description This parameter is required.
     *
     * @var AIAgentRuntimeConfig
     */
    public $runtimeConfig;

    /**
     * @var AIAgentTemplateConfig
     */
    public $templateConfig;

    /**
     * @example {"Email":"johndoe@example.com","Preferences":{"Language":"en"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId'      => 'AIAgentId',
        'runtimeConfig'  => 'RuntimeConfig',
        'templateConfig' => 'TemplateConfig',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }
        if (null !== $this->runtimeConfig) {
            $res['RuntimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toMap() : null;
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
     * @return StartAIAgentInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }
        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfig = AIAgentRuntimeConfig::fromMap($map['RuntimeConfig']);
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
