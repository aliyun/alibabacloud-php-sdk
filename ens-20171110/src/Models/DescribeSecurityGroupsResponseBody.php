<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponseBody\securityGroups;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupsResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
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
     * @description Details about security groups.
     *
     * @var securityGroups
     */
    public $securityGroups;

    /**
     * @description The total number of returned pages.
     *
     * @example 49
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
