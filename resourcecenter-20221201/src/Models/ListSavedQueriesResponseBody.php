<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListSavedQueriesResponseBody\savedQueries;

class ListSavedQueriesResponseBody extends Model
{
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

    /**
     * @var savedQueries[]
     */
    public $savedQueries;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'savedQueries' => 'SavedQueries',
    ];

    public function validate()
    {
        if (\is_array($this->savedQueries)) {
            Model::validateArray($this->savedQueries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->savedQueries) {
            if (\is_array($this->savedQueries)) {
                $res['SavedQueries'] = [];
                $n1 = 0;
                foreach ($this->savedQueries as $item1) {
                    $res['SavedQueries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SavedQueries'])) {
            if (!empty($map['SavedQueries'])) {
                $model->savedQueries = [];
                $n1 = 0;
                foreach ($map['SavedQueries'] as $item1) {
                    $model->savedQueries[$n1++] = savedQueries::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
