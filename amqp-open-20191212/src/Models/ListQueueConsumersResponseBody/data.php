<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponseBody\data\consumers;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var consumers[]
     */
    public $consumers;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example caebacccb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'consumers'  => 'Consumers',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
