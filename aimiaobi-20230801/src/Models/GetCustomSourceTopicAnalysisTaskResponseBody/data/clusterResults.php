<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody\data\clusterResults\clusterNews;

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

    public function validate()
    {
        if (\is_array($this->clusterNews)) {
            Model::validateArray($this->clusterNews);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterNews) {
            if (\is_array($this->clusterNews)) {
                $res['ClusterNews'] = [];
                $n1 = 0;
                foreach ($this->clusterNews as $item1) {
                    $res['ClusterNews'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['ClusterNews'])) {
            if (!empty($map['ClusterNews'])) {
                $model->clusterNews = [];
                $n1 = 0;
                foreach ($map['ClusterNews'] as $item1) {
                    $model->clusterNews[$n1++] = clusterNews::fromMap($item1);
                }
            }
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
