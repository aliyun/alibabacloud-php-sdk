<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\timedViewPointsResult\attitudes;
use AlibabaCloud\Tea\Model;

class timedViewPointsResult extends Model
{
    /**
     * @var attitudes[]
     */
    public $attitudes;
    protected $_name = [
        'attitudes' => 'Attitudes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attitudes) {
            $res['Attitudes'] = [];
            if (null !== $this->attitudes && \is_array($this->attitudes)) {
                $n = 0;
                foreach ($this->attitudes as $item) {
                    $res['Attitudes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timedViewPointsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attitudes'])) {
            if (!empty($map['Attitudes'])) {
                $model->attitudes = [];
                $n                = 0;
                foreach ($map['Attitudes'] as $item) {
                    $model->attitudes[$n++] = null !== $item ? attitudes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
