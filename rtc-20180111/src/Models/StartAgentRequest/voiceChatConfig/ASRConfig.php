<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

use AlibabaCloud\Dara\Model;

class ASRConfig extends Model
{
    /**
     * @var string[]
     */
    public $languageHints;

    /**
     * @var int
     */
    public $maxSentenceSilence;

    /**
     * @var bool
     */
    public $semanticPunctuationEnabled;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
        'languageHints' => 'LanguageHints',
        'maxSentenceSilence' => 'MaxSentenceSilence',
        'semanticPunctuationEnabled' => 'SemanticPunctuationEnabled',
        'sourceLanguage' => 'SourceLanguage',
        'vocabularyId' => 'VocabularyId',
    ];

    public function validate()
    {
        if (\is_array($this->languageHints)) {
            Model::validateArray($this->languageHints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->languageHints) {
            if (\is_array($this->languageHints)) {
                $res['LanguageHints'] = [];
                $n1 = 0;
                foreach ($this->languageHints as $item1) {
                    $res['LanguageHints'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LanguageHints'])) {
            if (!empty($map['LanguageHints'])) {
                $model->languageHints = [];
                $n1 = 0;
                foreach ($map['LanguageHints'] as $item1) {
                    $model->languageHints[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        return $model;
    }
}
