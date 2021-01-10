<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListAsrPipelineResponseBody\pipelineList\pipeline;

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
    protected $_name = [
        'topic'     => 'Topic',
        'queueName' => 'QueueName',
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

        return $model;
    }
}
