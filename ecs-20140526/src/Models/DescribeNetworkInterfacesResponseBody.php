<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInterfacesResponseBody extends Model
{
    /**
     * @description Details about the ENIs.
     *
     * @var networkInterfaceSets
     */
    public $networkInterfaceSets;

    /**
     * @description The query token returned in this call.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number of the returned page.
     *
     * > This parameter will be removed in the future. We recommend that you use the NextToken and MaxResults parameters to perform a paged query.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * > This parameter will be removed in the future. We recommend that you use the NextToken and MaxResults parameters to perform a paged query.
     * @example 1
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
     * @description The total number of ENIs.
     *
     * > If you specify the `MaxResults` and `NextToken` parameters to perform a paged query, the value of the `TotalCount` response parameter is invalid.
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkInterfaceSets' => 'NetworkInterfaceSets',
        'nextToken'            => 'NextToken',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceSets) {
            $res['NetworkInterfaceSets'] = null !== $this->networkInterfaceSets ? $this->networkInterfaceSets->toMap() : null;
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
     * @return DescribeNetworkInterfacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceSets'])) {
            $model->networkInterfaceSets = networkInterfaceSets::fromMap($map['NetworkInterfaceSets']);
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
