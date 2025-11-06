<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordResponseBody\matchedSentiveWords;

class FuzzyMatchDomainSensitiveWordResponseBody extends Model
{
    /**
     * @var bool
     */
    public $exist;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var matchedSentiveWords
     */
    public $matchedSentiveWords;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exist' => 'Exist',
        'keyword' => 'Keyword',
        'matchedSentiveWords' => 'MatchedSentiveWords',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->matchedSentiveWords) {
            $this->matchedSentiveWords->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exist) {
            $res['Exist'] = $this->exist;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->matchedSentiveWords) {
            $res['MatchedSentiveWords'] = null !== $this->matchedSentiveWords ? $this->matchedSentiveWords->toArray($noStream) : $this->matchedSentiveWords;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
