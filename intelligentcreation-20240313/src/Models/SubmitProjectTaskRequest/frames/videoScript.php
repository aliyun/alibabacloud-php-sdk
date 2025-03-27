<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames;

use AlibabaCloud\Dara\Model;

class videoScript extends Model
{
    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $emotion;

    /**
     * @var string
     */
    public $pitchRate;

    /**
     * @var bool
     */
    public $speechOpen;

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
    public $type;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @var int
     */
    public $voiceTemplateId;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'audioUrl' => 'audioUrl',
        'emotion' => 'emotion',
        'pitchRate' => 'pitchRate',
        'speechOpen' => 'speechOpen',
        'speedRate' => 'speedRate',
        'textContent' => 'textContent',
        'type' => 'type',
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
        if (null !== $this->audioUrl) {
            $res['audioUrl'] = $this->audioUrl;
        }

        if (null !== $this->emotion) {
            $res['emotion'] = $this->emotion;
        }

        if (null !== $this->pitchRate) {
            $res['pitchRate'] = $this->pitchRate;
        }

        if (null !== $this->speechOpen) {
            $res['speechOpen'] = $this->speechOpen;
        }

        if (null !== $this->speedRate) {
            $res['speedRate'] = $this->speedRate;
        }

        if (null !== $this->textContent) {
            $res['textContent'] = $this->textContent;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['audioUrl'])) {
            $model->audioUrl = $map['audioUrl'];
        }

        if (isset($map['emotion'])) {
            $model->emotion = $map['emotion'];
        }

        if (isset($map['pitchRate'])) {
            $model->pitchRate = $map['pitchRate'];
        }

        if (isset($map['speechOpen'])) {
            $model->speechOpen = $map['speechOpen'];
        }

        if (isset($map['speedRate'])) {
            $model->speedRate = $map['speedRate'];
        }

        if (isset($map['textContent'])) {
            $model->textContent = $map['textContent'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
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
