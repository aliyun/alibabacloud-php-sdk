<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class ModifyAsrConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

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
    public $asrOverrides;

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
    public $engine;

    /**
     * @var string
     */
    public $entryId;

    /**
     * @var string
     */
    public $nlsServiceType;
    protected $_name = [
        'appKey' => 'AppKey',
        'asrAcousticModelId' => 'AsrAcousticModelId',
        'asrClassVocabularyId' => 'AsrClassVocabularyId',
        'asrCustomizationId' => 'AsrCustomizationId',
        'asrOverrides' => 'AsrOverrides',
        'asrVocabularyId' => 'AsrVocabularyId',
        'configLevel' => 'ConfigLevel',
        'engine' => 'Engine',
        'entryId' => 'EntryId',
        'nlsServiceType' => 'NlsServiceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->asrAcousticModelId) {
            $res['AsrAcousticModelId'] = $this->asrAcousticModelId;
        }

        if (null !== $this->asrClassVocabularyId) {
            $res['AsrClassVocabularyId'] = $this->asrClassVocabularyId;
        }

        if (null !== $this->asrCustomizationId) {
            $res['AsrCustomizationId'] = $this->asrCustomizationId;
        }

        if (null !== $this->asrOverrides) {
            $res['AsrOverrides'] = $this->asrOverrides;
        }

        if (null !== $this->asrVocabularyId) {
            $res['AsrVocabularyId'] = $this->asrVocabularyId;
        }

        if (null !== $this->configLevel) {
            $res['ConfigLevel'] = $this->configLevel;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }

        if (null !== $this->nlsServiceType) {
            $res['NlsServiceType'] = $this->nlsServiceType;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AsrAcousticModelId'])) {
            $model->asrAcousticModelId = $map['AsrAcousticModelId'];
        }

        if (isset($map['AsrClassVocabularyId'])) {
            $model->asrClassVocabularyId = $map['AsrClassVocabularyId'];
        }

        if (isset($map['AsrCustomizationId'])) {
            $model->asrCustomizationId = $map['AsrCustomizationId'];
        }

        if (isset($map['AsrOverrides'])) {
            $model->asrOverrides = $map['AsrOverrides'];
        }

        if (isset($map['AsrVocabularyId'])) {
            $model->asrVocabularyId = $map['AsrVocabularyId'];
        }

        if (isset($map['ConfigLevel'])) {
            $model->configLevel = $map['ConfigLevel'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }

        if (isset($map['NlsServiceType'])) {
            $model->nlsServiceType = $map['NlsServiceType'];
        }

        return $model;
    }
}
