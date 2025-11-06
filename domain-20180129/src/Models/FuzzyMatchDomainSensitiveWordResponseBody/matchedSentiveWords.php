<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordResponseBody\matchedSentiveWords\matchedSensitiveWord;

class matchedSentiveWords extends Model
{
    /**
     * @var matchedSensitiveWord[]
     */
    public $matchedSensitiveWord;
    protected $_name = [
        'matchedSensitiveWord' => 'MatchedSensitiveWord',
    ];

    public function validate()
    {
        if (\is_array($this->matchedSensitiveWord)) {
            Model::validateArray($this->matchedSensitiveWord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchedSensitiveWord) {
            if (\is_array($this->matchedSensitiveWord)) {
                $res['MatchedSensitiveWord'] = [];
                $n1 = 0;
                foreach ($this->matchedSensitiveWord as $item1) {
                    $res['MatchedSensitiveWord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MatchedSensitiveWord'])) {
            if (!empty($map['MatchedSensitiveWord'])) {
                $model->matchedSensitiveWord = [];
                $n1 = 0;
                foreach ($map['MatchedSensitiveWord'] as $item1) {
                    $model->matchedSensitiveWord[$n1] = matchedSensitiveWord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
