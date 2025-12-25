<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\reviewInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\reviewInfo\sentenceReviewResults\sentenceReviewResults;

class sentenceReviewResults extends Model
{
    /**
     * @var sentenceReviewResults[]
     */
    public $sentenceReviewResults;
    protected $_name = [
        'sentenceReviewResults' => 'SentenceReviewResults',
    ];

    public function validate()
    {
        if (\is_array($this->sentenceReviewResults)) {
            Model::validateArray($this->sentenceReviewResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sentenceReviewResults) {
            if (\is_array($this->sentenceReviewResults)) {
                $res['SentenceReviewResults'] = [];
                $n1 = 0;
                foreach ($this->sentenceReviewResults as $item1) {
                    $res['SentenceReviewResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SentenceReviewResults'])) {
            if (!empty($map['SentenceReviewResults'])) {
                $model->sentenceReviewResults = [];
                $n1 = 0;
                foreach ($map['SentenceReviewResults'] as $item1) {
                    $model->sentenceReviewResults[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
