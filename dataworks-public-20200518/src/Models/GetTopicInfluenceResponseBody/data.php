<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponseBody\data\influences;

class data extends Model
{
    /**
     * @var influences[]
     */
    public $influences;

    /**
     * @var int
     */
    public $topicId;
    protected $_name = [
        'influences' => 'Influences',
        'topicId' => 'TopicId',
    ];

    public function validate()
    {
        if (\is_array($this->influences)) {
            Model::validateArray($this->influences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->influences) {
            if (\is_array($this->influences)) {
                $res['Influences'] = [];
                $n1 = 0;
                foreach ($this->influences as $item1) {
                    $res['Influences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
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
        if (isset($map['Influences'])) {
            if (!empty($map['Influences'])) {
                $model->influences = [];
                $n1 = 0;
                foreach ($map['Influences'] as $item1) {
                    $model->influences[$n1] = influences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
