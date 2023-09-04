<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListGroupMembersResponseBody\groupMembers;
use AlibabaCloud\Tea\Model;

class ListGroupMembersResponseBody extends Model
{
    /**
     * @description The users in the group.
     *
     * @var groupMembers[]
     */
    public $groupMembers;

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
     * @example BB759F84-2C64-5C36-B6C6-253172C5C370
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
        'groupMembers' => 'GroupMembers',
        'isTruncated'  => 'IsTruncated',
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
        if (null !== $this->groupMembers) {
            $res['GroupMembers'] = [];
            if (null !== $this->groupMembers && \is_array($this->groupMembers)) {
                $n = 0;
                foreach ($this->groupMembers as $item) {
                    $res['GroupMembers'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListGroupMembersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupMembers'])) {
            if (!empty($map['GroupMembers'])) {
                $model->groupMembers = [];
                $n                   = 0;
                foreach ($map['GroupMembers'] as $item) {
                    $model->groupMembers[$n++] = null !== $item ? groupMembers::fromMap($item) : $item;
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
