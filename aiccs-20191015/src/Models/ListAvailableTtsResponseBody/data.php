<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAvailableTtsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ttsAuditionFileUrl;

    /**
     * @var string
     */
    public $ttsEngine;

    /**
     * @var string
     */
    public $ttsStyle;

    /**
     * @var string
     */
    public $ttsVoiceCode;

    /**
     * @var string
     */
    public $ttsVoiceName;
    protected $_name = [
        'ttsAuditionFileUrl' => 'TtsAuditionFileUrl',
        'ttsEngine' => 'TtsEngine',
        'ttsStyle' => 'TtsStyle',
        'ttsVoiceCode' => 'TtsVoiceCode',
        'ttsVoiceName' => 'TtsVoiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ttsAuditionFileUrl) {
            $res['TtsAuditionFileUrl'] = $this->ttsAuditionFileUrl;
        }

        if (null !== $this->ttsEngine) {
            $res['TtsEngine'] = $this->ttsEngine;
        }

        if (null !== $this->ttsStyle) {
            $res['TtsStyle'] = $this->ttsStyle;
        }

        if (null !== $this->ttsVoiceCode) {
            $res['TtsVoiceCode'] = $this->ttsVoiceCode;
        }

        if (null !== $this->ttsVoiceName) {
            $res['TtsVoiceName'] = $this->ttsVoiceName;
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
        if (isset($map['TtsAuditionFileUrl'])) {
            $model->ttsAuditionFileUrl = $map['TtsAuditionFileUrl'];
        }

        if (isset($map['TtsEngine'])) {
            $model->ttsEngine = $map['TtsEngine'];
        }

        if (isset($map['TtsStyle'])) {
            $model->ttsStyle = $map['TtsStyle'];
        }

        if (isset($map['TtsVoiceCode'])) {
            $model->ttsVoiceCode = $map['TtsVoiceCode'];
        }

        if (isset($map['TtsVoiceName'])) {
            $model->ttsVoiceName = $map['TtsVoiceName'];
        }

        return $model;
    }
}
