<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\rtcConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

class StartAgentRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var rtcConfig
     */
    public $rtcConfig;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var voiceChatConfig
     */
    public $voiceChatConfig;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'rtcConfig' => 'RtcConfig',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'voiceChatConfig' => 'VoiceChatConfig',
    ];

    public function validate()
    {
        if (null !== $this->rtcConfig) {
            $this->rtcConfig->validate();
        }
        if (null !== $this->voiceChatConfig) {
            $this->voiceChatConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->rtcConfig) {
            $res['RtcConfig'] = null !== $this->rtcConfig ? $this->rtcConfig->toArray($noStream) : $this->rtcConfig;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->voiceChatConfig) {
            $res['VoiceChatConfig'] = null !== $this->voiceChatConfig ? $this->voiceChatConfig->toArray($noStream) : $this->voiceChatConfig;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['RtcConfig'])) {
            $model->rtcConfig = rtcConfig::fromMap($map['RtcConfig']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['VoiceChatConfig'])) {
            $model->voiceChatConfig = voiceChatConfig::fromMap($map['VoiceChatConfig']);
        }

        return $model;
    }
}
