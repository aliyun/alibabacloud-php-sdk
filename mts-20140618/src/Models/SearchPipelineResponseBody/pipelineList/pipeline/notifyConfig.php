<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SearchPipelineResponseBody\pipelineList\pipeline;

use AlibabaCloud\Tea\Model;

class notifyConfig extends Model
{
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
    public $mqTag;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'mqTopic'   => 'MqTopic',
        'queueName' => 'QueueName',
        'mqTag'     => 'MqTag',
        'topic'     => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mqTopic) {
            $res['MqTopic'] = $this->mqTopic;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->mqTag) {
            $res['MqTag'] = $this->mqTag;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['MqTopic'])) {
            $model->mqTopic = $map['MqTopic'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['MqTag'])) {
            $model->mqTag = $map['MqTag'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
