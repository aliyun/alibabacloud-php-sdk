<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesResponseBody\data\queues;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var queues[]
     */
    public $queues;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'queues'     => 'Queues',
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
        if (null !== $this->queues) {
            $res['Queues'] = [];
            if (null !== $this->queues && \is_array($this->queues)) {
                $n = 0;
                foreach ($this->queues as $item) {
                    $res['Queues'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = [];
                $n             = 0;
                foreach ($map['Queues'] as $item) {
                    $model->queues[$n++] = null !== $item ? queues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
