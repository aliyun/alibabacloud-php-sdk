<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion\transcriberConfig\correctionRules;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion\transcriberConfig\nlsAccessProfile;

class transcriberConfig extends Model
{
    /**
     * @var correctionRules[]
     */
    public $correctionRules;

    /**
     * @var string
     */
    public $customizationId;

    /**
     * @var int
     */
    public $endSilenceTimeout;

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
     * @var string
     */
    public $speechNoiseThreshold;

    /**
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
        'correctionRules' => 'CorrectionRules',
        'customizationId' => 'CustomizationId',
        'endSilenceTimeout' => 'EndSilenceTimeout',
        'model' => 'Model',
        'nlsAccessProfile' => 'NlsAccessProfile',
        'nlsAccessType' => 'NlsAccessType',
        'nlsEngine' => 'NlsEngine',
        'speechNoiseThreshold' => 'SpeechNoiseThreshold',
        'vocabularyId' => 'VocabularyId',
    ];

    public function validate()
    {
        if (\is_array($this->correctionRules)) {
            Model::validateArray($this->correctionRules);
        }
        if (null !== $this->nlsAccessProfile) {
            $this->nlsAccessProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->correctionRules) {
            if (\is_array($this->correctionRules)) {
                $res['CorrectionRules'] = [];
                $n1 = 0;
                foreach ($this->correctionRules as $item1) {
                    $res['CorrectionRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customizationId) {
            $res['CustomizationId'] = $this->customizationId;
        }

        if (null !== $this->endSilenceTimeout) {
            $res['EndSilenceTimeout'] = $this->endSilenceTimeout;
        }

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

        if (null !== $this->speechNoiseThreshold) {
            $res['SpeechNoiseThreshold'] = $this->speechNoiseThreshold;
        }

        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
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
        if (isset($map['CorrectionRules'])) {
            if (!empty($map['CorrectionRules'])) {
                $model->correctionRules = [];
                $n1 = 0;
                foreach ($map['CorrectionRules'] as $item1) {
                    $model->correctionRules[$n1] = correctionRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomizationId'])) {
            $model->customizationId = $map['CustomizationId'];
        }

        if (isset($map['EndSilenceTimeout'])) {
            $model->endSilenceTimeout = $map['EndSilenceTimeout'];
        }

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

        if (isset($map['SpeechNoiseThreshold'])) {
            $model->speechNoiseThreshold = $map['SpeechNoiseThreshold'];
        }

        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        return $model;
    }
}
