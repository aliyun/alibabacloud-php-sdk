<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\GetAsrConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $asrAcousticModelId;
    /**
     * @var string
     */
    public $asrClassVocabularyId;
    /**
     * @var string
     */
    public $asrCustomizationId;
    /**
     * @var string
     */
    public $asrVocabularyId;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $engineXufei;
    protected $_name = [
        'asrAcousticModelId'   => 'AsrAcousticModelId',
        'asrClassVocabularyId' => 'AsrClassVocabularyId',
        'asrCustomizationId'   => 'AsrCustomizationId',
        'asrVocabularyId'      => 'AsrVocabularyId',
        'engine'               => 'Engine',
        'engineXufei'          => 'EngineXufei',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrAcousticModelId) {
            $res['AsrAcousticModelId'] = $this->asrAcousticModelId;
        }

        if (null !== $this->asrClassVocabularyId) {
            $res['AsrClassVocabularyId'] = $this->asrClassVocabularyId;
        }

        if (null !== $this->asrCustomizationId) {
            $res['AsrCustomizationId'] = $this->asrCustomizationId;
        }

        if (null !== $this->asrVocabularyId) {
            $res['AsrVocabularyId'] = $this->asrVocabularyId;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineXufei) {
            $res['EngineXufei'] = $this->engineXufei;
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
        if (isset($map['AsrAcousticModelId'])) {
            $model->asrAcousticModelId = $map['AsrAcousticModelId'];
        }

        if (isset($map['AsrClassVocabularyId'])) {
            $model->asrClassVocabularyId = $map['AsrClassVocabularyId'];
        }

        if (isset($map['AsrCustomizationId'])) {
            $model->asrCustomizationId = $map['AsrCustomizationId'];
        }

        if (isset($map['AsrVocabularyId'])) {
            $model->asrVocabularyId = $map['AsrVocabularyId'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineXufei'])) {
            $model->engineXufei = $map['EngineXufei'];
        }

        return $model;
    }
}
