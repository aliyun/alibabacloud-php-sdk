<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\rtcConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;
use AlibabaCloud\Tea\Model;

class StartAgentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aoe****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description This parameter is required.
     *
     * @var rtcConfig
     */
    public $rtcConfig;

    /**
     * @description This parameter is required.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example 76dasgb****
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->rtcConfig) {
            $res['RtcConfig'] = null !== $this->rtcConfig ? $this->rtcConfig->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->voiceChatConfig) {
            $res['VoiceChatConfig'] = null !== $this->voiceChatConfig ? $this->voiceChatConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAgentRequest
     */
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
