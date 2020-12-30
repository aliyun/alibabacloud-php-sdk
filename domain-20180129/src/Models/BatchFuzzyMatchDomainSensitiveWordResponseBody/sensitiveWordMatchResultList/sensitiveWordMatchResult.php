<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\BatchFuzzyMatchDomainSensitiveWordResponseBody\sensitiveWordMatchResultList;

use AlibabaCloud\SDK\Domain\V20180129\Models\BatchFuzzyMatchDomainSensitiveWordResponseBody\sensitiveWordMatchResultList\sensitiveWordMatchResult\matchedSentiveWords;
use AlibabaCloud\Tea\Model;

class sensitiveWordMatchResult extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var bool
     */
    public $exist;

    /**
     * @var matchedSentiveWords
     */
    public $matchedSentiveWords;
    protected $_name = [
        'keyword'             => 'Keyword',
        'exist'               => 'Exist',
        'matchedSentiveWords' => 'MatchedSentiveWords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->exist) {
            $res['Exist'] = $this->exist;
        }
        if (null !== $this->matchedSentiveWords) {
            $res['MatchedSentiveWords'] = null !== $this->matchedSentiveWords ? $this->matchedSentiveWords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveWordMatchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Exist'])) {
            $model->exist = $map['Exist'];
        }
        if (isset($map['MatchedSentiveWords'])) {
            $model->matchedSentiveWords = matchedSentiveWords::fromMap($map['MatchedSentiveWords']);
        }

        return $model;
    }
}
