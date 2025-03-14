<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class StartAIAgentInstanceShrinkRequest extends Model
{
    /**
     * @description The ID of the AI agent created in the [IMS](https://ims.console.aliyun.com/ai/robot/list) console.
     *
     * This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $AIAgentId;

    /**
     * @description 同步聊天记录配置。
     *
     * @var string
     */
    public $chatSyncConfigShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $runtimeConfigShrink;

    /**
     * @example f213fbc005e4f309379701645f4****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $templateConfigShrink;

    /**
     * @example {"Email":"johndoe@example.com","Preferences":{"Language":"en"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'chatSyncConfigShrink' => 'ChatSyncConfig',
        'runtimeConfigShrink' => 'RuntimeConfig',
        'sessionId' => 'SessionId',
        'templateConfigShrink' => 'TemplateConfig',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }
        if (null !== $this->chatSyncConfigShrink) {
            $res['ChatSyncConfig'] = $this->chatSyncConfigShrink;
        }
        if (null !== $this->runtimeConfigShrink) {
            $res['RuntimeConfig'] = $this->runtimeConfigShrink;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
     * @return StartAIAgentInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }
        if (isset($map['ChatSyncConfig'])) {
            $model->chatSyncConfigShrink = $map['ChatSyncConfig'];
        }
        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfigShrink = $map['RuntimeConfig'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
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
