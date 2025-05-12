<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineResponseBody\pipeline;

use AlibabaCloud\Dara\Model;

class notifyConfig extends Model
{
    /**
     * @var string
     */
    public $mqTag;

    /**
     * @var string
     */
    public $mqTopic;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'mqTag' => 'MqTag',
        'mqTopic' => 'MqTopic',
        'queueName' => 'QueueName',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mqTag) {
            $res['MqTag'] = $this->mqTag;
        }

        if (null !== $this->mqTopic) {
            $res['MqTopic'] = $this->mqTopic;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
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
        if (isset($map['MqTag'])) {
            $model->mqTag = $map['MqTag'];
        }

        if (isset($map['MqTopic'])) {
            $model->mqTopic = $map['MqTopic'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
