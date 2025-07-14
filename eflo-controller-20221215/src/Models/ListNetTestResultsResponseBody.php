<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults;
use AlibabaCloud\Tea\Model;

class ListNetTestResultsResponseBody extends Model
{
    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * Default value:
     *
     *   If you do not configure this parameter or if you set this parameter to a value less than 20, the default value is 20.
     *   If you set this parameter to a value that is greater than 100, the default value is 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The results.
     *
     * @var netTestResults[]
     */
    public $netTestResults;

    /**
     * @description The token that is used in the next request to retrieve a new page of results.
     *
     * @example 3a6b93229825ac667104463b56790c91
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 3C683243-7915-57FB-9570-A2932C1C0F78
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'netTestResults' => 'NetTestResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->netTestResults) {
            $res['NetTestResults'] = [];
            if (null !== $this->netTestResults && \is_array($this->netTestResults)) {
                $n = 0;
                foreach ($this->netTestResults as $item) {
                    $res['NetTestResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListNetTestResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetTestResults'])) {
            if (!empty($map['NetTestResults'])) {
                $model->netTestResults = [];
                $n = 0;
                foreach ($map['NetTestResults'] as $item) {
                    $model->netTestResults[$n++] = null !== $item ? netTestResults::fromMap($item) : $item;
                }
            }
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
