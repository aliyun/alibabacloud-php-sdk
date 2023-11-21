<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListSavedQueriesResponseBody\savedQueries;
use AlibabaCloud\Tea\Model;

class ListSavedQueriesResponseBody extends Model
{
    /**
     * @description The maximum number of entries per page.
     *
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example D696E6EF-3A6D-5770-801E-4982081FE4D0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the custom query templates.
     *
     * @var savedQueries[]
     */
    public $savedQueries;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'savedQueries' => 'SavedQueries',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SavedQueries'] = [];
            if (null !== $this->savedQueries && \is_array($this->savedQueries)) {
                $n = 0;
                foreach ($this->savedQueries as $item) {
                    $res['SavedQueries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSavedQueriesResponseBody
     */
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
                $n                   = 0;
                foreach ($map['SavedQueries'] as $item) {
                    $model->savedQueries[$n++] = null !== $item ? savedQueries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
