<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet;
use AlibabaCloud\Tea\Model;

class DescribeAccessPointsResponseBody extends Model
{
    /**
     * @description The information about the access point.
     *
     * @var accessPointSet
     */
    public $accessPointSet;

    /**
     * @description The number of the returned page. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 3E85D803-C7CF-4BCD-9CFE-6DBA1DFFA027
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessPointSet' => 'AccessPointSet',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointSet) {
            $res['AccessPointSet'] = null !== $this->accessPointSet ? $this->accessPointSet->toMap() : null;
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
     * @return DescribeAccessPointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointSet'])) {
            $model->accessPointSet = accessPointSet::fromMap($map['AccessPointSet']);
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
