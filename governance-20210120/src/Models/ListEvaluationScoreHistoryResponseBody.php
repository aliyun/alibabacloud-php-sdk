<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponseBody\scoreHistory;

class ListEvaluationScoreHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scoreHistory
     */
    public $scoreHistory;
    protected $_name = [
        'requestId' => 'RequestId',
        'scoreHistory' => 'ScoreHistory',
    ];

    public function validate()
    {
        if (null !== $this->scoreHistory) {
            $this->scoreHistory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scoreHistory) {
            $res['ScoreHistory'] = null !== $this->scoreHistory ? $this->scoreHistory->toArray($noStream) : $this->scoreHistory;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScoreHistory'])) {
            $model->scoreHistory = scoreHistory::fromMap($map['ScoreHistory']);
        }

        return $model;
    }
}
