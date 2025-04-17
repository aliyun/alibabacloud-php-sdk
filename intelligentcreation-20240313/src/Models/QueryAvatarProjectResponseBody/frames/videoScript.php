<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponseBody\frames;

use AlibabaCloud\Dara\Model;

class videoScript extends Model
{
    /**
     * @var string
     */
    public $emotion;

    /**
     * @var string
     */
    public $pitchRate;

    /**
     * @var string
     */
    public $speedRate;

    /**
     * @var string
     */
    public $textContent;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @var string
     */
    public $voiceTemplateId;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'emotion' => 'emotion',
        'pitchRate' => 'pitchRate',
        'speedRate' => 'speedRate',
        'textContent' => 'textContent',
        'voiceLanguage' => 'voiceLanguage',
        'voiceTemplateId' => 'voiceTemplateId',
        'volume' => 'volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->emotion) {
            $res['emotion'] = $this->emotion;
        }

        if (null !== $this->pitchRate) {
            $res['pitchRate'] = $this->pitchRate;
        }

        if (null !== $this->speedRate) {
            $res['speedRate'] = $this->speedRate;
        }

        if (null !== $this->textContent) {
            $res['textContent'] = $this->textContent;
        }

        if (null !== $this->voiceLanguage) {
            $res['voiceLanguage'] = $this->voiceLanguage;
        }

        if (null !== $this->voiceTemplateId) {
            $res['voiceTemplateId'] = $this->voiceTemplateId;
        }

        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
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
        if (isset($map['emotion'])) {
            $model->emotion = $map['emotion'];
        }

        if (isset($map['pitchRate'])) {
            $model->pitchRate = $map['pitchRate'];
        }

        if (isset($map['speedRate'])) {
            $model->speedRate = $map['speedRate'];
        }

        if (isset($map['textContent'])) {
            $model->textContent = $map['textContent'];
        }

        if (isset($map['voiceLanguage'])) {
            $model->voiceLanguage = $map['voiceLanguage'];
        }

        if (isset($map['voiceTemplateId'])) {
            $model->voiceTemplateId = $map['voiceTemplateId'];
        }

        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        return $model;
    }
}
