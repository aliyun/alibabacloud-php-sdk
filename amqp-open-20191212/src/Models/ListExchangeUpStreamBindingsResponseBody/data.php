<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangeUpStreamBindingsResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangeUpStreamBindingsResponseBody\data\bindings;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bindings[]
     */
    public $bindings;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'maxResults' => 'MaxResults',
        'bindings'   => 'Bindings',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->bindings) {
            $res['Bindings'] = [];
            if (null !== $this->bindings && \is_array($this->bindings)) {
                $n = 0;
                foreach ($this->bindings as $item) {
                    $res['Bindings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Bindings'])) {
            if (!empty($map['Bindings'])) {
                $model->bindings = [];
                $n               = 0;
                foreach ($map['Bindings'] as $item) {
                    $model->bindings[$n++] = null !== $item ? bindings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
