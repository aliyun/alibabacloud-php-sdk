<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponseBody\scoreHistory\totalScoreHistory;

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
        if (\is_array($this->totalScoreHistory)) {
            Model::validateArray($this->totalScoreHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalScoreHistory) {
            if (\is_array($this->totalScoreHistory)) {
                $res['TotalScoreHistory'] = [];
                $n1 = 0;
                foreach ($this->totalScoreHistory as $item1) {
                    $res['TotalScoreHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TotalScoreHistory'])) {
            if (!empty($map['TotalScoreHistory'])) {
                $model->totalScoreHistory = [];
                $n1 = 0;
                foreach ($map['TotalScoreHistory'] as $item1) {
                    $model->totalScoreHistory[$n1++] = totalScoreHistory::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
