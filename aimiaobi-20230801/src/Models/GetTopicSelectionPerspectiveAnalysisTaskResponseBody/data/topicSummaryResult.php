<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\topicSummaryResult\summaries;
use AlibabaCloud\Tea\Model;

class topicSummaryResult extends Model
{
    /**
     * @var summaries[]
     */
    public $summaries;
    protected $_name = [
        'summaries' => 'Summaries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaries) {
            $res['Summaries'] = [];
            if (null !== $this->summaries && \is_array($this->summaries)) {
                $n = 0;
                foreach ($this->summaries as $item) {
                    $res['Summaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topicSummaryResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Summaries'])) {
            if (!empty($map['Summaries'])) {
                $model->summaries = [];
                $n                = 0;
                foreach ($map['Summaries'] as $item) {
                    $model->summaries[$n++] = null !== $item ? summaries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
