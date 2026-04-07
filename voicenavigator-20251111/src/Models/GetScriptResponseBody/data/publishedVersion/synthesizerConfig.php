<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion\synthesizerConfig\nlsAccessProfile;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion\synthesizerConfig\pronRules;

class synthesizerConfig extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var nlsAccessProfile
     */
    public $nlsAccessProfile;

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
     * @var pronRules[]
     */
    public $pronRules;

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
        'model' => 'Model',
        'nlsAccessProfile' => 'NlsAccessProfile',
        'nlsAccessType' => 'NlsAccessType',
        'nlsEngine' => 'NlsEngine',
        'pitchRate' => 'PitchRate',
        'pronRules' => 'PronRules',
        'speechRate' => 'SpeechRate',
        'voice' => 'Voice',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (null !== $this->nlsAccessProfile) {
            $this->nlsAccessProfile->validate();
        }
        if (\is_array($this->pronRules)) {
            Model::validateArray($this->pronRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->nlsAccessProfile) {
            $res['NlsAccessProfile'] = null !== $this->nlsAccessProfile ? $this->nlsAccessProfile->toArray($noStream) : $this->nlsAccessProfile;
        }

        if (null !== $this->nlsAccessType) {
            $res['NlsAccessType'] = $this->nlsAccessType;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }

        if (null !== $this->pronRules) {
            if (\is_array($this->pronRules)) {
                $res['PronRules'] = [];
                $n1 = 0;
                foreach ($this->pronRules as $item1) {
                    $res['PronRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NlsAccessProfile'])) {
            $model->nlsAccessProfile = nlsAccessProfile::fromMap($map['NlsAccessProfile']);
        }

        if (isset($map['NlsAccessType'])) {
            $model->nlsAccessType = $map['NlsAccessType'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }

        if (isset($map['PronRules'])) {
            if (!empty($map['PronRules'])) {
                $model->pronRules = [];
                $n1 = 0;
                foreach ($map['PronRules'] as $item1) {
                    $model->pronRules[$n1] = pronRules::fromMap($item1);
                    ++$n1;
                }
            }
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
