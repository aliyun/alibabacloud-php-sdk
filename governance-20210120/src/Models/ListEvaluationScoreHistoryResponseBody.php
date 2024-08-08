<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponseBody\scoreHistory;
use AlibabaCloud\Tea\Model;

class ListEvaluationScoreHistoryResponseBody extends Model
{
    /**
     * @example AC9BD94C-D20C-4D27-88D4-89E8D75C051B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scoreHistory
     */
    public $scoreHistory;
    protected $_name = [
        'requestId'    => 'RequestId',
        'scoreHistory' => 'ScoreHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scoreHistory) {
            $res['ScoreHistory'] = null !== $this->scoreHistory ? $this->scoreHistory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEvaluationScoreHistoryResponseBody
     */
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
