<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig\avatarChat3D;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig\voiceChat;
use AlibabaCloud\Tea\Model;

class AIAgentTemplateConfig extends Model
{
    /**
     * @var avatarChat3D
     */
    public $avatarChat3D;

    /**
     * @var voiceChat
     */
    public $voiceChat;
    protected $_name = [
        'avatarChat3D' => 'AvatarChat3D',
        'voiceChat'    => 'VoiceChat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarChat3D) {
            $res['AvatarChat3D'] = null !== $this->avatarChat3D ? $this->avatarChat3D->toMap() : null;
        }
        if (null !== $this->voiceChat) {
            $res['VoiceChat'] = null !== $this->voiceChat ? $this->voiceChat->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIAgentTemplateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarChat3D'])) {
            $model->avatarChat3D = avatarChat3D::fromMap($map['AvatarChat3D']);
        }
        if (isset($map['VoiceChat'])) {
            $model->voiceChat = voiceChat::fromMap($map['VoiceChat']);
        }

        return $model;
    }
}
