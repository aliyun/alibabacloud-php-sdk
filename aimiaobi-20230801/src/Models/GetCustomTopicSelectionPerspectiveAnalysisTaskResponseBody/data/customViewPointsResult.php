<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskResponseBody\data\customViewPointsResult\attitudes;
use AlibabaCloud\Tea\Model;

class customViewPointsResult extends Model
{
    /**
     * @var attitudes[]
     */
    public $attitudes;

    /**
     * @example 热点主题事件
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'attitudes' => 'Attitudes',
        'topic' => 'Topic',
    ];

    public function validate() {}

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
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customViewPointsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attitudes'])) {
            if (!empty($map['Attitudes'])) {
                $model->attitudes = [];
                $n = 0;
                foreach ($map['Attitudes'] as $item) {
                    $model->attitudes[$n++] = null !== $item ? attitudes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
