<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddPipelineResponseBody\pipeline;

use AlibabaCloud\Tea\Model;

class notifyConfig extends Model
{
    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $mqTopic;

    /**
     * @var string
     */
    public $mqTag;
    protected $_name = [
        'topic'     => 'Topic',
        'queueName' => 'QueueName',
        'mqTopic'   => 'MqTopic',
        'mqTag'     => 'MqTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->mqTopic) {
            $res['MqTopic'] = $this->mqTopic;
        }
        if (null !== $this->mqTag) {
            $res['MqTag'] = $this->mqTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['MqTopic'])) {
            $model->mqTopic = $map['MqTopic'];
        }
        if (isset($map['MqTag'])) {
            $model->mqTag = $map['MqTag'];
        }

        return $model;
    }
}
