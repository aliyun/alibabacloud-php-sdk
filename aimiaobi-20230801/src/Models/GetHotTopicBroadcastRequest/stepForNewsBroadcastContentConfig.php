<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest\stepForNewsBroadcastContentConfig\customHotValueWeights;
use AlibabaCloud\Tea\Model;

class stepForNewsBroadcastContentConfig extends Model
{
    /**
     * @example ["科技","经济","时政","娱乐"]
     *
     * @var string[]
     */
    public $categories;

    /**
     * @var customHotValueWeights[]
     */
    public $customHotValueWeights;

    /**
     * @example 10
     *
     * @var int
     */
    public $topicCount;
    protected $_name = [
        'categories' => 'Categories',
        'customHotValueWeights' => 'CustomHotValueWeights',
        'topicCount' => 'TopicCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->customHotValueWeights) {
            $res['CustomHotValueWeights'] = [];
            if (null !== $this->customHotValueWeights && \is_array($this->customHotValueWeights)) {
                $n = 0;
                foreach ($this->customHotValueWeights as $item) {
                    $res['CustomHotValueWeights'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topicCount) {
            $res['TopicCount'] = $this->topicCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepForNewsBroadcastContentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['CustomHotValueWeights'])) {
            if (!empty($map['CustomHotValueWeights'])) {
                $model->customHotValueWeights = [];
                $n = 0;
                foreach ($map['CustomHotValueWeights'] as $item) {
                    $model->customHotValueWeights[$n++] = null !== $item ? customHotValueWeights::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopicCount'])) {
            $model->topicCount = $map['TopicCount'];
        }

        return $model;
    }
}
