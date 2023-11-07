<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordResponseBody\matchedSentiveWords;
use AlibabaCloud\Tea\Model;

class FuzzyMatchDomainSensitiveWordResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $exist;

    /**
     * @example xxx**.cn
     *
     * @var string
     */
    public $keyword;

    /**
     * @var matchedSentiveWords
     */
    public $matchedSentiveWords;

    /**
     * @example D15F91FD-0B34-4E48-8CBF-EFA5D2A31586
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exist'               => 'Exist',
        'keyword'             => 'Keyword',
        'matchedSentiveWords' => 'MatchedSentiveWords',
        'requestId'           => 'RequestId',
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
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->matchedSentiveWords) {
            $res['MatchedSentiveWords'] = null !== $this->matchedSentiveWords ? $this->matchedSentiveWords->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MatchedSentiveWords'])) {
            $model->matchedSentiveWords = matchedSentiveWords::fromMap($map['MatchedSentiveWords']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
