<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangeUpStreamBindingsResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangeUpStreamBindingsResponseBody\data\bindings;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The bindings.
     *
     * @var bindings[]
     */
    public $bindings;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the end of the current returned page. If this parameter is empty, all data is retrieved.
     *
     * @example caebacccb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'bindings'   => 'Bindings',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindings) {
            $res['Bindings'] = [];
            if (null !== $this->bindings && \is_array($this->bindings)) {
                $n = 0;
                foreach ($this->bindings as $item) {
                    $res['Bindings'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Bindings'])) {
            if (!empty($map['Bindings'])) {
                $model->bindings = [];
                $n               = 0;
                foreach ($map['Bindings'] as $item) {
                    $model->bindings[$n++] = null !== $item ? bindings::fromMap($item) : $item;
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
