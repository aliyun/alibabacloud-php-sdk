<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListJoinedGroupsForUserResponseBody\joinedGroups;
use AlibabaCloud\Tea\Model;

class ListJoinedGroupsForUserResponseBody extends Model
{
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
     * @description The groups to which the user is added.
     *
     * @var joinedGroups[]
     */
    public $joinedGroups;

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
     * @example E9BBB45F-7877-5DE9-96A5-20E6CFA48929
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'isTruncated'  => 'IsTruncated',
        'joinedGroups' => 'JoinedGroups',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'totalCounts'  => 'TotalCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->joinedGroups) {
            $res['JoinedGroups'] = [];
            if (null !== $this->joinedGroups && \is_array($this->joinedGroups)) {
                $n = 0;
                foreach ($this->joinedGroups as $item) {
                    $res['JoinedGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJoinedGroupsForUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['JoinedGroups'])) {
            if (!empty($map['JoinedGroups'])) {
                $model->joinedGroups = [];
                $n                   = 0;
                foreach ($map['JoinedGroups'] as $item) {
                    $model->joinedGroups[$n++] = null !== $item ? joinedGroups::fromMap($item) : $item;
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
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
