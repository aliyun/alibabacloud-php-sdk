<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddCensorPipelineResponseBody\pipeline;

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
    public $queue;
    protected $_name = [
        'topic' => 'Topic',
        'queue' => 'Queue',
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
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
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
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        return $model;
    }
}
