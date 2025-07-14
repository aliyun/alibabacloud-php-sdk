<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet;
use AlibabaCloud\Tea\Model;

class DescribeInstanceHistoryEventsResponseBody extends Model
{
    /**
     * @description Details about the instance system events.
     *
     * @var instanceSystemEventSet
     */
    public $instanceSystemEventSet;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example f1c9fa9de5752***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number.
     *
     * >
     *
     *   If MaxResults and NextToken are used to query results by page, ignore this parameter.
     *
     *   This parameter will be removed in the future. We recommend that you use the NextToken and MaxResults parameters for a paged query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * >
     *
     *   If MaxResults and NextToken are used to query results by page, ignore this parameter.
     *
     *   This parameter will be removed in the future. We recommend that you use the NextToken and MaxResults parameters for a paged query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of instances.
     *
     * >  If you specify the MaxResults and NextToken request parameters to perform a paged query, the value of the TotalCount response parameter is invalid.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceSystemEventSet' => 'InstanceSystemEventSet',
        'nextToken' => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSystemEventSet) {
            $res['InstanceSystemEventSet'] = null !== $this->instanceSystemEventSet ? $this->instanceSystemEventSet->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceHistoryEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSystemEventSet'])) {
            $model->instanceSystemEventSet = instanceSystemEventSet::fromMap($map['InstanceSystemEventSet']);
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
