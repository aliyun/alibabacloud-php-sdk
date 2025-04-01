<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListExampleQueriesResponseBody\exampleQueries;

class ListExampleQueriesResponseBody extends Model
{
    /**
     * @var exampleQueries[]
     */
    public $exampleQueries;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exampleQueries' => 'ExampleQueries',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->exampleQueries)) {
            Model::validateArray($this->exampleQueries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exampleQueries) {
            if (\is_array($this->exampleQueries)) {
                $res['ExampleQueries'] = [];
                $n1 = 0;
                foreach ($this->exampleQueries as $item1) {
                    $res['ExampleQueries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExampleQueries'])) {
            if (!empty($map['ExampleQueries'])) {
                $model->exampleQueries = [];
                $n1 = 0;
                foreach ($map['ExampleQueries'] as $item1) {
                    $model->exampleQueries[$n1++] = exampleQueries::fromMap($item1);
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
