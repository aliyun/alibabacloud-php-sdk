<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\draftVersion;

use AlibabaCloud\Dara\Model;

class synthesizerConfig extends Model
{
    /**
     * @var string
     */
    public $nlsAccessType;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var int
     */
    public $pitchRate;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'nlsAccessType' => 'NlsAccessType',
        'nlsEngine' => 'NlsEngine',
        'pitchRate' => 'PitchRate',
        'speechRate' => 'SpeechRate',
        'voice' => 'Voice',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nlsAccessType) {
            $res['NlsAccessType'] = $this->nlsAccessType;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }

        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['NlsAccessType'])) {
            $model->nlsAccessType = $map['NlsAccessType'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }

        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
