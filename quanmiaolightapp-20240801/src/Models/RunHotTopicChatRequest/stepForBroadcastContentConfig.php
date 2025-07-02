<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\stepForBroadcastContentConfig\customHotValueWeights;

class stepForBroadcastContentConfig extends Model
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
        'categories' => 'categories',
        'customHotValueWeights' => 'customHotValueWeights',
        'topicCount' => 'topicCount',
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
                $res['categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customHotValueWeights) {
            if (\is_array($this->customHotValueWeights)) {
                $res['customHotValueWeights'] = [];
                $n1 = 0;
                foreach ($this->customHotValueWeights as $item1) {
                    $res['customHotValueWeights'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicCount) {
            $res['topicCount'] = $this->topicCount;
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
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['customHotValueWeights'])) {
            if (!empty($map['customHotValueWeights'])) {
                $model->customHotValueWeights = [];
                $n1 = 0;
                foreach ($map['customHotValueWeights'] as $item1) {
                    $model->customHotValueWeights[$n1] = customHotValueWeights::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['topicCount'])) {
            $model->topicCount = $map['topicCount'];
        }

        return $model;
    }
}
