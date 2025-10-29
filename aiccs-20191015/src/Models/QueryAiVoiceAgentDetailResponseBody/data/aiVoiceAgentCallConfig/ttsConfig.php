<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentCallConfig;

use AlibabaCloud\Dara\Model;

class ttsConfig extends Model
{
    /**
     * @var int
     */
    public $ttsSpeed;

    /**
     * @var string
     */
    public $ttsStyle;

    /**
     * @var int
     */
    public $ttsVolume;
    protected $_name = [
        'ttsSpeed' => 'TtsSpeed',
        'ttsStyle' => 'TtsStyle',
        'ttsVolume' => 'TtsVolume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ttsSpeed) {
            $res['TtsSpeed'] = $this->ttsSpeed;
        }

        if (null !== $this->ttsStyle) {
            $res['TtsStyle'] = $this->ttsStyle;
        }

        if (null !== $this->ttsVolume) {
            $res['TtsVolume'] = $this->ttsVolume;
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
        if (isset($map['TtsSpeed'])) {
            $model->ttsSpeed = $map['TtsSpeed'];
        }

        if (isset($map['TtsStyle'])) {
            $model->ttsStyle = $map['TtsStyle'];
        }

        if (isset($map['TtsVolume'])) {
            $model->ttsVolume = $map['TtsVolume'];
        }

        return $model;
    }
}
