<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponseBody\data\consumers;

class data extends Model
{
    /**
     * @var consumers[]
     */
    public $consumers;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'consumers' => 'Consumers',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->consumers)) {
            Model::validateArray($this->consumers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumers) {
            if (\is_array($this->consumers)) {
                $res['Consumers'] = [];
                $n1 = 0;
                foreach ($this->consumers as $item1) {
                    $res['Consumers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Consumers'])) {
            if (!empty($map['Consumers'])) {
                $model->consumers = [];
                $n1 = 0;
                foreach ($map['Consumers'] as $item1) {
                    $model->consumers[$n1++] = consumers::fromMap($item1);
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
