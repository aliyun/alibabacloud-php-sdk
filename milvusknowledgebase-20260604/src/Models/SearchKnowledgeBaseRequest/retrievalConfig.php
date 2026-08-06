<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;

class retrievalConfig extends Model
{
    /**
     * @var int
     */
    public $candidateCount;

    /**
     * @var bool
     */
    public $enableQueryExpansion;

    /**
     * @var float
     */
    public $minScore;

    /**
     * @var float
     */
    public $semanticWeight;

    /**
     * @var string[]
     */
    public $translationLanguages;
    protected $_name = [
        'candidateCount' => 'candidateCount',
        'enableQueryExpansion' => 'enableQueryExpansion',
        'minScore' => 'minScore',
        'semanticWeight' => 'semanticWeight',
        'translationLanguages' => 'translationLanguages',
    ];

    public function validate()
    {
        if (\is_array($this->translationLanguages)) {
            Model::validateArray($this->translationLanguages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->candidateCount) {
            $res['candidateCount'] = $this->candidateCount;
        }

        if (null !== $this->enableQueryExpansion) {
            $res['enableQueryExpansion'] = $this->enableQueryExpansion;
        }

        if (null !== $this->minScore) {
            $res['minScore'] = $this->minScore;
        }

        if (null !== $this->semanticWeight) {
            $res['semanticWeight'] = $this->semanticWeight;
        }

        if (null !== $this->translationLanguages) {
            if (\is_array($this->translationLanguages)) {
                $res['translationLanguages'] = [];
                $n1 = 0;
                foreach ($this->translationLanguages as $item1) {
                    $res['translationLanguages'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['candidateCount'])) {
            $model->candidateCount = $map['candidateCount'];
        }

        if (isset($map['enableQueryExpansion'])) {
            $model->enableQueryExpansion = $map['enableQueryExpansion'];
        }

        if (isset($map['minScore'])) {
            $model->minScore = $map['minScore'];
        }

        if (isset($map['semanticWeight'])) {
            $model->semanticWeight = $map['semanticWeight'];
        }

        if (isset($map['translationLanguages'])) {
            if (!empty($map['translationLanguages'])) {
                $model->translationLanguages = [];
                $n1 = 0;
                foreach ($map['translationLanguages'] as $item1) {
                    $model->translationLanguages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
