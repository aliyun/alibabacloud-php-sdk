<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponseBody;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponseBody\scoreHistory\totalScoreHistory;
use AlibabaCloud\Tea\Model;

class scoreHistory extends Model
{
    /**
     * @var totalScoreHistory[]
     */
    public $totalScoreHistory;
    protected $_name = [
        'totalScoreHistory' => 'TotalScoreHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalScoreHistory) {
            $res['TotalScoreHistory'] = [];
            if (null !== $this->totalScoreHistory && \is_array($this->totalScoreHistory)) {
                $n = 0;
                foreach ($this->totalScoreHistory as $item) {
                    $res['TotalScoreHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scoreHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalScoreHistory'])) {
            if (!empty($map['TotalScoreHistory'])) {
                $model->totalScoreHistory = [];
                $n                        = 0;
                foreach ($map['TotalScoreHistory'] as $item) {
                    $model->totalScoreHistory[$n++] = null !== $item ? totalScoreHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
