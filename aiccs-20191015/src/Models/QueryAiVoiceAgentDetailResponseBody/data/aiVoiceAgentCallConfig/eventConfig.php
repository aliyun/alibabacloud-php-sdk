<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentCallConfig;

use AlibabaCloud\Dara\Model;

class eventConfig extends Model
{
    /**
     * @var bool
     */
    public $callAssistantHangup;

    /**
     * @var bool
     */
    public $callAssistantRecognize;

    /**
     * @var bool
     */
    public $muteActive;

    /**
     * @var int
     */
    public $muteDuration;

    /**
     * @var int
     */
    public $muteHangupNum;

    /**
     * @var int
     */
    public $sessionTimeout;
    protected $_name = [
        'callAssistantHangup' => 'CallAssistantHangup',
        'callAssistantRecognize' => 'CallAssistantRecognize',
        'muteActive' => 'MuteActive',
        'muteDuration' => 'MuteDuration',
        'muteHangupNum' => 'MuteHangupNum',
        'sessionTimeout' => 'SessionTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callAssistantHangup) {
            $res['CallAssistantHangup'] = $this->callAssistantHangup;
        }

        if (null !== $this->callAssistantRecognize) {
            $res['CallAssistantRecognize'] = $this->callAssistantRecognize;
        }

        if (null !== $this->muteActive) {
            $res['MuteActive'] = $this->muteActive;
        }

        if (null !== $this->muteDuration) {
            $res['MuteDuration'] = $this->muteDuration;
        }

        if (null !== $this->muteHangupNum) {
            $res['MuteHangupNum'] = $this->muteHangupNum;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
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
        if (isset($map['CallAssistantHangup'])) {
            $model->callAssistantHangup = $map['CallAssistantHangup'];
        }

        if (isset($map['CallAssistantRecognize'])) {
            $model->callAssistantRecognize = $map['CallAssistantRecognize'];
        }

        if (isset($map['MuteActive'])) {
            $model->muteActive = $map['MuteActive'];
        }

        if (isset($map['MuteDuration'])) {
            $model->muteDuration = $map['MuteDuration'];
        }

        if (isset($map['MuteHangupNum'])) {
            $model->muteHangupNum = $map['MuteHangupNum'];
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        return $model;
    }
}
