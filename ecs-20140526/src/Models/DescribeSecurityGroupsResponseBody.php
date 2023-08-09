<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupsResponseBody extends Model
{
    /**
     * @description A pagination token. If the return value of this parameter is empty when MaxResults and NextToken are used for a paged query, no next page exists.
     *
     * @example e71d8a535bd9cc11
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number.
     *
     * > This parameter will be deprecated in the future. We recommend that you use NextToken and MaxResults for a paged query.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * > This parameter will be deprecated in the future. We recommend that you use NextToken and MaxResults for a paged query.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the security group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details about the security groups.
     *
     * @var securityGroups
     */
    public $securityGroups;

    /**
     * @description The total number of security groups returned. If `MaxResults` and `NextToken` are specified in the request, the value of this parameter is not returned.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'requestId'      => 'RequestId',
        'securityGroups' => 'SecurityGroups',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = null !== $this->securityGroups ? $this->securityGroups->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroups'])) {
            $model->securityGroups = securityGroups::fromMap($map['SecurityGroups']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
