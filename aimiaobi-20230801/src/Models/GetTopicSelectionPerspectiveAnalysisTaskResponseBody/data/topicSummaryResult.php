<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\topicSummaryResult\summaries;

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
        if (\is_array($this->summaries)) {
            Model::validateArray($this->summaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->summaries) {
            if (\is_array($this->summaries)) {
                $res['Summaries'] = [];
                $n1 = 0;
                foreach ($this->summaries as $item1) {
                    $res['Summaries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Summaries'])) {
            if (!empty($map['Summaries'])) {
                $model->summaries = [];
                $n1 = 0;
                foreach ($map['Summaries'] as $item1) {
                    $model->summaries[$n1++] = summaries::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
