<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponseBody\data\connections;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The value of the key in the request path.
     *
     * @var connections[]
     */
    public $connections;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var float
     */
    public $maxResults;

    /**
     * @description If excess return values exist, this parameter is returned.
     *
     * @example 0
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var float
     */
    public $total;
    protected $_name = [
        'connections' => 'Connections',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = [];
            if (null !== $this->connections && \is_array($this->connections)) {
                $n = 0;
                foreach ($this->connections as $item) {
                    $res['Connections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n                  = 0;
                foreach ($map['Connections'] as $item) {
                    $model->connections[$n++] = null !== $item ? connections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
