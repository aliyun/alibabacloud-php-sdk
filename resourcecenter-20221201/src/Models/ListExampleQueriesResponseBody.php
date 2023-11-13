<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListExampleQueriesResponseBody\exampleQueries;
use AlibabaCloud\Tea\Model;

class ListExampleQueriesResponseBody extends Model
{
    /**
     * @var exampleQueries[]
     */
    public $exampleQueries;

    /**
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example D696E6EF-3A6D-5770-801E-4982081FE4D0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exampleQueries' => 'ExampleQueries',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exampleQueries) {
            $res['ExampleQueries'] = [];
            if (null !== $this->exampleQueries && \is_array($this->exampleQueries)) {
                $n = 0;
                foreach ($this->exampleQueries as $item) {
                    $res['ExampleQueries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExampleQueriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExampleQueries'])) {
            if (!empty($map['ExampleQueries'])) {
                $model->exampleQueries = [];
                $n                     = 0;
                foreach ($map['ExampleQueries'] as $item) {
                    $model->exampleQueries[$n++] = null !== $item ? exampleQueries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
