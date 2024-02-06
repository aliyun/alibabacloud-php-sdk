<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults;
use AlibabaCloud\Tea\Model;

class DescribeDataDistResultResponseBody extends Model
{
    /**
     * @description The distribution status of data files on edge instances.
     *
     * @var distResults
     */
    public $distResults;

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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 50373E71-7710-4620-8AAB-133CCE49451C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 49
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'distResults' => 'DistResults',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distResults) {
            $res['DistResults'] = null !== $this->distResults ? $this->distResults->toMap() : null;
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
     * @return DescribeDataDistResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistResults'])) {
            $model->distResults = distResults::fromMap($map['DistResults']);
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
