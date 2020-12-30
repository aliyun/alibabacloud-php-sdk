<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordResponseBody\matchedSentiveWords;
use AlibabaCloud\Tea\Model;

class FuzzyMatchDomainSensitiveWordResponseBody extends Model
{
    /**
     * @var bool
     */
    public $exist;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var matchedSentiveWords
     */
    public $matchedSentiveWords;
    protected $_name = [
        'exist'               => 'Exist',
        'requestId'           => 'RequestId',
        'keyword'             => 'Keyword',
        'matchedSentiveWords' => 'MatchedSentiveWords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exist) {
            $res['Exist'] = $this->exist;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->matchedSentiveWords) {
            $res['MatchedSentiveWords'] = null !== $this->matchedSentiveWords ? $this->matchedSentiveWords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FuzzyMatchDomainSensitiveWordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exist'])) {
            $model->exist = $map['Exist'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MatchedSentiveWords'])) {
            $model->matchedSentiveWords = matchedSentiveWords::fromMap($map['MatchedSentiveWords']);
        }

        return $model;
    }
}
