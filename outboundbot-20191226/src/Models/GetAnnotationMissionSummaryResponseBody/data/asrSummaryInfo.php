<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class asrSummaryInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $addCustomizationDataCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $addVocabularyDataCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $annotationInvalid;

    /**
     * @example 1
     *
     * @var int
     */
    public $characterCorrectRate;

    /**
     * @example 1
     *
     * @var int
     */
    public $characterErrorRate;

    /**
     * @example 1
     *
     * @var int
     */
    public $chatTotalCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $noAnnotation;

    /**
     * @example 1
     *
     * @var int
     */
    public $sentenceErrorRate;

    /**
     * @example 1
     *
     * @var int
     */
    public $wordErrorRate;
    protected $_name = [
        'addCustomizationDataCount' => 'AddCustomizationDataCount',
        'addVocabularyDataCount' => 'AddVocabularyDataCount',
        'annotationInvalid' => 'AnnotationInvalid',
        'characterCorrectRate' => 'CharacterCorrectRate',
        'characterErrorRate' => 'CharacterErrorRate',
        'chatTotalCount' => 'ChatTotalCount',
        'noAnnotation' => 'NoAnnotation',
        'sentenceErrorRate' => 'SentenceErrorRate',
        'wordErrorRate' => 'WordErrorRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addCustomizationDataCount) {
            $res['AddCustomizationDataCount'] = $this->addCustomizationDataCount;
        }
        if (null !== $this->addVocabularyDataCount) {
            $res['AddVocabularyDataCount'] = $this->addVocabularyDataCount;
        }
        if (null !== $this->annotationInvalid) {
            $res['AnnotationInvalid'] = $this->annotationInvalid;
        }
        if (null !== $this->characterCorrectRate) {
            $res['CharacterCorrectRate'] = $this->characterCorrectRate;
        }
        if (null !== $this->characterErrorRate) {
            $res['CharacterErrorRate'] = $this->characterErrorRate;
        }
        if (null !== $this->chatTotalCount) {
            $res['ChatTotalCount'] = $this->chatTotalCount;
        }
        if (null !== $this->noAnnotation) {
            $res['NoAnnotation'] = $this->noAnnotation;
        }
        if (null !== $this->sentenceErrorRate) {
            $res['SentenceErrorRate'] = $this->sentenceErrorRate;
        }
        if (null !== $this->wordErrorRate) {
            $res['WordErrorRate'] = $this->wordErrorRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrSummaryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddCustomizationDataCount'])) {
            $model->addCustomizationDataCount = $map['AddCustomizationDataCount'];
        }
        if (isset($map['AddVocabularyDataCount'])) {
            $model->addVocabularyDataCount = $map['AddVocabularyDataCount'];
        }
        if (isset($map['AnnotationInvalid'])) {
            $model->annotationInvalid = $map['AnnotationInvalid'];
        }
        if (isset($map['CharacterCorrectRate'])) {
            $model->characterCorrectRate = $map['CharacterCorrectRate'];
        }
        if (isset($map['CharacterErrorRate'])) {
            $model->characterErrorRate = $map['CharacterErrorRate'];
        }
        if (isset($map['ChatTotalCount'])) {
            $model->chatTotalCount = $map['ChatTotalCount'];
        }
        if (isset($map['NoAnnotation'])) {
            $model->noAnnotation = $map['NoAnnotation'];
        }
        if (isset($map['SentenceErrorRate'])) {
            $model->sentenceErrorRate = $map['SentenceErrorRate'];
        }
        if (isset($map['WordErrorRate'])) {
            $model->wordErrorRate = $map['WordErrorRate'];
        }

        return $model;
    }
}
