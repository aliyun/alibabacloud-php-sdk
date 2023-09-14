<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups;
use AlibabaCloud\Tea\Model;

class ListServerGroupsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If **NextToken** is not empty, the value of NextToken can be used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f8****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BA984
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The backend server groups.
     *
     * @var serverGroups[]
     */
    public $serverGroups;

    /**
     * @description The total number of entries returned.
     *
     * @example 1000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'serverGroups' => 'ServerGroups',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->serverGroups) {
            $res['ServerGroups'] = [];
            if (null !== $this->serverGroups && \is_array($this->serverGroups)) {
                $n = 0;
                foreach ($this->serverGroups as $item) {
                    $res['ServerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServerGroupsResponseBody
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
        if (isset($map['ServerGroups'])) {
            if (!empty($map['ServerGroups'])) {
                $model->serverGroups = [];
                $n                   = 0;
                foreach ($map['ServerGroups'] as $item) {
                    $model->serverGroups[$n++] = null !== $item ? serverGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
