<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessAssignmentsResponseBody\accessAssignments;
use AlibabaCloud\Tea\Model;

class ListAccessAssignmentsResponseBody extends Model
{
    /**
     * @description The access permissions that are assigned.
     *
     * @var accessAssignments[]
     */
    public $accessAssignments;

    /**
     * @description Indicates whether the queried entries are truncated. Valid values:
     *
     *   true: The queried entries are truncated.
     *   false: The queried entries are not truncated.
     *
     * @example false
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is returned for the next page.
     *
     * >  This parameter is returned only when the value of `IsTruncated` is `true`.
     * @example K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 66898413-EB80-556D-9429-06FE3548F672
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'accessAssignments' => 'AccessAssignments',
        'isTruncated'       => 'IsTruncated',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'totalCounts'       => 'TotalCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessAssignments) {
            $res['AccessAssignments'] = [];
            if (null !== $this->accessAssignments && \is_array($this->accessAssignments)) {
                $n = 0;
                foreach ($this->accessAssignments as $item) {
                    $res['AccessAssignments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
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
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessAssignmentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessAssignments'])) {
            if (!empty($map['AccessAssignments'])) {
                $model->accessAssignments = [];
                $n                        = 0;
                foreach ($map['AccessAssignments'] as $item) {
                    $model->accessAssignments[$n++] = null !== $item ? accessAssignments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
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
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
