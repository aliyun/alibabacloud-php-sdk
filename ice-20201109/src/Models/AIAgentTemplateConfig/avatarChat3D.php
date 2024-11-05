<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;

use AlibabaCloud\Tea\Model;

class avatarChat3D extends Model
{
    /**
     * @var int
     */
    public $asrMaxSilence;

    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $bailianAppParams;

    /**
     * @var bool
     */
    public $enablePushToTalk;

    /**
     * @var bool
     */
    public $enableVoiceInterrupt;

    /**
     * @var bool
     */
    public $gracefulShutdown;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var bool
     */
    public $useVoiceprint;

    /**
     * @var int
     */
    public $userOfflineTimeout;

    /**
     * @var int
     */
    public $userOnlineTimeout;

    /**
     * @var string
     */
    public $voiceId;

    /**
     * @var string
     */
    public $voiceprintId;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'asrMaxSilence'        => 'AsrMaxSilence',
        'avatarId'             => 'AvatarId',
        'bailianAppParams'     => 'BailianAppParams',
        'enablePushToTalk'     => 'EnablePushToTalk',
        'enableVoiceInterrupt' => 'EnableVoiceInterrupt',
        'gracefulShutdown'     => 'GracefulShutdown',
        'greeting'             => 'Greeting',
        'useVoiceprint'        => 'UseVoiceprint',
        'userOfflineTimeout'   => 'UserOfflineTimeout',
        'userOnlineTimeout'    => 'UserOnlineTimeout',
        'voiceId'              => 'VoiceId',
        'voiceprintId'         => 'VoiceprintId',
        'volume'               => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrMaxSilence) {
            $res['AsrMaxSilence'] = $this->asrMaxSilence;
        }
        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }
        if (null !== $this->bailianAppParams) {
            $res['BailianAppParams'] = $this->bailianAppParams;
        }
        if (null !== $this->enablePushToTalk) {
            $res['EnablePushToTalk'] = $this->enablePushToTalk;
        }
        if (null !== $this->enableVoiceInterrupt) {
            $res['EnableVoiceInterrupt'] = $this->enableVoiceInterrupt;
        }
        if (null !== $this->gracefulShutdown) {
            $res['GracefulShutdown'] = $this->gracefulShutdown;
        }
        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }
        if (null !== $this->useVoiceprint) {
            $res['UseVoiceprint'] = $this->useVoiceprint;
        }
        if (null !== $this->userOfflineTimeout) {
            $res['UserOfflineTimeout'] = $this->userOfflineTimeout;
        }
        if (null !== $this->userOnlineTimeout) {
            $res['UserOnlineTimeout'] = $this->userOnlineTimeout;
        }
        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }
        if (null !== $this->voiceprintId) {
            $res['VoiceprintId'] = $this->voiceprintId;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avatarChat3D
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrMaxSilence'])) {
            $model->asrMaxSilence = $map['AsrMaxSilence'];
        }
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }
        if (isset($map['BailianAppParams'])) {
            $model->bailianAppParams = $map['BailianAppParams'];
        }
        if (isset($map['EnablePushToTalk'])) {
            $model->enablePushToTalk = $map['EnablePushToTalk'];
        }
        if (isset($map['EnableVoiceInterrupt'])) {
            $model->enableVoiceInterrupt = $map['EnableVoiceInterrupt'];
        }
        if (isset($map['GracefulShutdown'])) {
            $model->gracefulShutdown = $map['GracefulShutdown'];
        }
        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }
        if (isset($map['UseVoiceprint'])) {
            $model->useVoiceprint = $map['UseVoiceprint'];
        }
        if (isset($map['UserOfflineTimeout'])) {
            $model->userOfflineTimeout = $map['UserOfflineTimeout'];
        }
        if (isset($map['UserOnlineTimeout'])) {
            $model->userOnlineTimeout = $map['UserOnlineTimeout'];
        }
        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }
        if (isset($map['VoiceprintId'])) {
            $model->voiceprintId = $map['VoiceprintId'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
