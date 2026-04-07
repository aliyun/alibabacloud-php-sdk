<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest\transcriberConfig\nlsAccessProfile;

class transcriberConfig extends Model
{
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
     * @var int
     */
    public $speechNoiseThreshold;

    /**
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
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
        if (null !== $this->nlsAccessProfile) {
            $this->nlsAccessProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
