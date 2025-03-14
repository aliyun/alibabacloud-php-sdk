<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeAIAgentInstanceResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentRuntimeConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The URL of the call log file.
     *
     * @example https://example.com/call_logs/12345
     *
     * @var string
     */
    public $callLogUrl;

    /**
     * @description The runtime configurations of the AI agent.
     *
     * @example {"VoiceChat":{"AgentUserId":"voice_agent_001","ChannelId":"voice_channel_001","AuthToken":"your_voice_chat_auth_token"}}
     *
     * @var AIAgentRuntimeConfig
     */
    public $runtimeConfig;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @description The state of the AI agent. Valid values: Finished and Executing.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The template configurations of the AI agent.
     *
     * @example {"VoiceChat": {"AppId": "your_voice_chat_app_id"}}
     *
     * @var AIAgentTemplateConfig
     */
    public $templateConfig;

    /**
     * @description The custom information.
     *
     * @example {"Email":"johndoe@example.com","Preferences":{"Language":"en"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'callLogUrl' => 'CallLogUrl',
        'runtimeConfig' => 'RuntimeConfig',
        'sessionId' => 'SessionId',
        'status' => 'Status',
        'templateConfig' => 'TemplateConfig',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callLogUrl) {
            $res['CallLogUrl'] = $this->callLogUrl;
        }
        if (null !== $this->runtimeConfig) {
            $res['RuntimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toMap() : null;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallLogUrl'])) {
            $model->callLogUrl = $map['CallLogUrl'];
        }
        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfig = AIAgentRuntimeConfig::fromMap($map['RuntimeConfig']);
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
