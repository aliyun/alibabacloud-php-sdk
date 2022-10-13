<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ModifyAsrConfigRequest extends Model
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
     * @var int
     */
    public $configLevel;

    /**
     * @var string
     */
    public $entryId;
    protected $_name = [
        'asrAcousticModelId'   => 'AsrAcousticModelId',
        'asrClassVocabularyId' => 'AsrClassVocabularyId',
        'asrCustomizationId'   => 'AsrCustomizationId',
        'asrVocabularyId'      => 'AsrVocabularyId',
        'configLevel'          => 'ConfigLevel',
        'entryId'              => 'EntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->configLevel) {
            $res['ConfigLevel'] = $this->configLevel;
        }
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAsrConfigRequest
     */
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
        if (isset($map['ConfigLevel'])) {
            $model->configLevel = $map['ConfigLevel'];
        }
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }

        return $model;
    }
}
