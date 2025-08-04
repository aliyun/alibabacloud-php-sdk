<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\ASRConfig\vadConfig;
use AlibabaCloud\Tea\Model;

class ASRConfig extends Model
{
    /**
     * @var string[]
     */
    public $languageHints;

    /**
     * @example 800
     *
     * @var int
     */
    public $maxSentenceSilence;

    /**
     * @example false
     *
     * @var bool
     */
    public $semanticPunctuationEnabled;

    /**
     * @example zh
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var vadConfig
     */
    public $vadConfig;

    /**
     * @example vocab-xxx-24ee19fa8cfb4d52902170a0xxxxxxxx
     *
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
        'languageHints' => 'LanguageHints',
        'maxSentenceSilence' => 'MaxSentenceSilence',
        'semanticPunctuationEnabled' => 'SemanticPunctuationEnabled',
        'sourceLanguage' => 'SourceLanguage',
        'vadConfig' => 'VadConfig',
        'vocabularyId' => 'VocabularyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->languageHints) {
            $res['LanguageHints'] = $this->languageHints;
        }
        if (null !== $this->maxSentenceSilence) {
            $res['MaxSentenceSilence'] = $this->maxSentenceSilence;
        }
        if (null !== $this->semanticPunctuationEnabled) {
            $res['SemanticPunctuationEnabled'] = $this->semanticPunctuationEnabled;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->vadConfig) {
            $res['VadConfig'] = null !== $this->vadConfig ? $this->vadConfig->toMap() : null;
        }
        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ASRConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LanguageHints'])) {
            if (!empty($map['LanguageHints'])) {
                $model->languageHints = $map['LanguageHints'];
            }
        }
        if (isset($map['MaxSentenceSilence'])) {
            $model->maxSentenceSilence = $map['MaxSentenceSilence'];
        }
        if (isset($map['SemanticPunctuationEnabled'])) {
            $model->semanticPunctuationEnabled = $map['SemanticPunctuationEnabled'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['VadConfig'])) {
            $model->vadConfig = vadConfig::fromMap($map['VadConfig']);
        }
        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        return $model;
    }
}
