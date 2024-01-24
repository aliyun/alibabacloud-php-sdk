<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponseBody\data;

use AlibabaCloud\Tea\Model;

class consumers extends Model
{
    /**
     * @description The consumer tag.
     *
     * @example sgen-1
     *
     * @var string
     */
    public $consumerTag;
    protected $_name = [
        'consumerTag' => 'ConsumerTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerTag) {
            $res['ConsumerTag'] = $this->consumerTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerTag'])) {
            $model->consumerTag = $map['ConsumerTag'];
        }

        return $model;
    }
}
