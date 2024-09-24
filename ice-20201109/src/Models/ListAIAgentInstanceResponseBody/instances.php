<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentInstanceResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentRuntimeConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example https://example.com/call_logs/12345.json
     *
     * @var string
     */
    public $callLogUrl;

    /**
     * @example {"VoiceChat":{"AgentUserId":"voice_agent_001","ChannelId":"voice_channel_001","AuthToken":"your_voice_chat_auth_token"}}
     *
     * @var AIAgentRuntimeConfig
     */
    public $runtimeConfig;

    /**
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @example {"VoiceChat": {"VoiceId": "zhixiaoxia"}}
     *
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
        'callLogUrl'     => 'CallLogUrl',
        'runtimeConfig'  => 'RuntimeConfig',
        'status'         => 'Status',
        'templateConfig' => 'TemplateConfig',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callLogUrl) {
            $res['CallLogUrl'] = $this->callLogUrl;
        }
        if (null !== $this->runtimeConfig) {
            $res['RuntimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toMap() : null;
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
     * @return instances
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
