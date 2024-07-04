<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryPipelineListResponseBody\pipelineList\pipeline;

use AlibabaCloud\Tea\Model;

class notifyConfig extends Model
{
    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'queueName' => 'QueueName',
        'topic'     => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
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
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
