<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponseBody\instanceCloudAssistantStatusSet;
use AlibabaCloud\Tea\Model;

class DescribeCloudAssistantStatusResponseBody extends Model
{
    /**
     * @description Details about the installation status of Cloud Assistant on the instances.
     *
     * @var instanceCloudAssistantStatusSet
     */
    public $instanceCloudAssistantStatusSet;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example AAAAAdDWBF2
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceCloudAssistantStatusSet' => 'InstanceCloudAssistantStatusSet',
        'nextToken'                       => 'NextToken',
        'pageNumber'                      => 'PageNumber',
        'pageSize'                        => 'PageSize',
        'requestId'                       => 'RequestId',
        'totalCount'                      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCloudAssistantStatusSet) {
            $res['InstanceCloudAssistantStatusSet'] = null !== $this->instanceCloudAssistantStatusSet ? $this->instanceCloudAssistantStatusSet->toMap() : null;
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
     * @return DescribeCloudAssistantStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCloudAssistantStatusSet'])) {
            $model->instanceCloudAssistantStatusSet = instanceCloudAssistantStatusSet::fromMap($map['InstanceCloudAssistantStatusSet']);
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
