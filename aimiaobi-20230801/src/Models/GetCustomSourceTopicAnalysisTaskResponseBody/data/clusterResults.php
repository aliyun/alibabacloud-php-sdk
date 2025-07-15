<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody\data\clusterResults\clusterNews;
use AlibabaCloud\Tea\Model;

class clusterResults extends Model
{
    /**
     * @var clusterNews[]
     */
    public $clusterNews;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'clusterNews' => 'ClusterNews',
        'topic' => 'Topic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterNews) {
            $res['ClusterNews'] = [];
            if (null !== $this->clusterNews && \is_array($this->clusterNews)) {
                $n = 0;
                foreach ($this->clusterNews as $item) {
                    $res['ClusterNews'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return clusterResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterNews'])) {
            if (!empty($map['ClusterNews'])) {
                $model->clusterNews = [];
                $n = 0;
                foreach ($map['ClusterNews'] as $item) {
                    $model->clusterNews[$n++] = null !== $item ? clusterNews::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
