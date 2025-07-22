<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class StartAgentShrinkRequest extends Model
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
     * @var string
     */
    public $rtcConfigShrink;

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
     * @var string
     */
    public $voiceChatConfigShrink;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'rtcConfigShrink' => 'RtcConfig',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'voiceChatConfigShrink' => 'VoiceChatConfig',
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
        if (null !== $this->rtcConfigShrink) {
            $res['RtcConfig'] = $this->rtcConfigShrink;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->voiceChatConfigShrink) {
            $res['VoiceChatConfig'] = $this->voiceChatConfigShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAgentShrinkRequest
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
            $model->rtcConfigShrink = $map['RtcConfig'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['VoiceChatConfig'])) {
            $model->voiceChatConfigShrink = $map['VoiceChatConfig'];
        }

        return $model;
    }
}
