<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicSubscribeStatusResponseBody;

use AlibabaCloud\Dara\Model;

class topicSubscribeStatus extends Model
{
    /**
     * @var string[]
     */
    public $consumerGroups;
    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumerGroups' => 'ConsumerGroups',
        'topic'          => 'Topic',
    ];

    public function validate()
    {
        if (\is_array($this->consumerGroups)) {
            Model::validateArray($this->consumerGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroups) {
            if (\is_array($this->consumerGroups)) {
                $res['ConsumerGroups'] = [];
                $n1                    = 0;
                foreach ($this->consumerGroups as $item1) {
                    $res['ConsumerGroups'][$n1++] = $item1;
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
        if (isset($map['ConsumerGroups'])) {
            if (!empty($map['ConsumerGroups'])) {
                $model->consumerGroups = [];
                $n1                    = 0;
                foreach ($map['ConsumerGroups'] as $item1) {
                    $model->consumerGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
