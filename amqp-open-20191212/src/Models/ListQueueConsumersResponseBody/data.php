<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponseBody\data\consumers;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var consumers[]
     */
    public $consumers;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'consumers'  => 'Consumers',
        'maxResults' => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->consumers) {
            $res['Consumers'] = [];
            if (null !== $this->consumers && \is_array($this->consumers)) {
                $n = 0;
                foreach ($this->consumers as $item) {
                    $res['Consumers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Consumers'])) {
            if (!empty($map['Consumers'])) {
                $model->consumers = [];
                $n                = 0;
                foreach ($map['Consumers'] as $item) {
                    $model->consumers[$n++] = null !== $item ? consumers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
