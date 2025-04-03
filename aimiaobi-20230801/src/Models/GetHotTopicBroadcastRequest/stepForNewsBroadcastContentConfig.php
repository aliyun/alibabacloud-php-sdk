<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest\stepForNewsBroadcastContentConfig\customHotValueWeights;

class stepForNewsBroadcastContentConfig extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var customHotValueWeights[]
     */
    public $customHotValueWeights;

    /**
     * @var int
     */
    public $topicCount;
    protected $_name = [
        'categories' => 'Categories',
        'customHotValueWeights' => 'CustomHotValueWeights',
        'topicCount' => 'TopicCount',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (\is_array($this->customHotValueWeights)) {
            Model::validateArray($this->customHotValueWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->customHotValueWeights) {
            if (\is_array($this->customHotValueWeights)) {
                $res['CustomHotValueWeights'] = [];
                $n1 = 0;
                foreach ($this->customHotValueWeights as $item1) {
                    $res['CustomHotValueWeights'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->topicCount) {
            $res['TopicCount'] = $this->topicCount;
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CustomHotValueWeights'])) {
            if (!empty($map['CustomHotValueWeights'])) {
                $model->customHotValueWeights = [];
                $n1 = 0;
                foreach ($map['CustomHotValueWeights'] as $item1) {
                    $model->customHotValueWeights[$n1++] = customHotValueWeights::fromMap($item1);
                }
            }
        }

        if (isset($map['TopicCount'])) {
            $model->topicCount = $map['TopicCount'];
        }

        return $model;
    }
}
