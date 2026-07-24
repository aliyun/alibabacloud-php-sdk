<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\voiceprintResponse\dialogue;

use AlibabaCloud\Dara\Model;

class additions extends Model
{
    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $ageGroup;

    /**
     * @var float
     */
    public $ageScore;

    /**
     * @var float
     */
    public $bestVoiceprintScore;

    /**
     * @var string
     */
    public $emotion;

    /**
     * @var float
     */
    public $emotionScore;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var float
     */
    public $genderScore;

    /**
     * @var bool
     */
    public $isKnownVoiceprint;

    /**
     * @var string
     */
    public $speaker;
    protected $_name = [
        'age' => 'Age',
        'ageGroup' => 'AgeGroup',
        'ageScore' => 'AgeScore',
        'bestVoiceprintScore' => 'BestVoiceprintScore',
        'emotion' => 'Emotion',
        'emotionScore' => 'EmotionScore',
        'gender' => 'Gender',
        'genderScore' => 'GenderScore',
        'isKnownVoiceprint' => 'IsKnownVoiceprint',
        'speaker' => 'Speaker',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }

        if (null !== $this->ageGroup) {
            $res['AgeGroup'] = $this->ageGroup;
        }

        if (null !== $this->ageScore) {
            $res['AgeScore'] = $this->ageScore;
        }

        if (null !== $this->bestVoiceprintScore) {
            $res['BestVoiceprintScore'] = $this->bestVoiceprintScore;
        }

        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }

        if (null !== $this->emotionScore) {
            $res['EmotionScore'] = $this->emotionScore;
        }

        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }

        if (null !== $this->genderScore) {
            $res['GenderScore'] = $this->genderScore;
        }

        if (null !== $this->isKnownVoiceprint) {
            $res['IsKnownVoiceprint'] = $this->isKnownVoiceprint;
        }

        if (null !== $this->speaker) {
            $res['Speaker'] = $this->speaker;
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
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }

        if (isset($map['AgeGroup'])) {
            $model->ageGroup = $map['AgeGroup'];
        }

        if (isset($map['AgeScore'])) {
            $model->ageScore = $map['AgeScore'];
        }

        if (isset($map['BestVoiceprintScore'])) {
            $model->bestVoiceprintScore = $map['BestVoiceprintScore'];
        }

        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }

        if (isset($map['EmotionScore'])) {
            $model->emotionScore = $map['EmotionScore'];
        }

        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        if (isset($map['GenderScore'])) {
            $model->genderScore = $map['GenderScore'];
        }

        if (isset($map['IsKnownVoiceprint'])) {
            $model->isKnownVoiceprint = $map['IsKnownVoiceprint'];
        }

        if (isset($map['Speaker'])) {
            $model->speaker = $map['Speaker'];
        }

        return $model;
    }
}
