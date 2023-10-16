<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ModifyAsrConfigRequest extends Model
{
    /**
     * @example 6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22
     *
     * @var string
     */
    public $asrAcousticModelId;

    /**
     * @example 6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22
     *
     * @var string
     */
    public $asrClassVocabularyId;

    /**
     * @example 6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22
     *
     * @var string
     */
    public $asrCustomizationId;

    /**
     * @example 6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22
     *
     * @var string
     */
    public $asrVocabularyId;

    /**
     * @example 0
     *
     * @var int
     */
    public $configLevel;

    /**
     * @example 6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22
     *
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
