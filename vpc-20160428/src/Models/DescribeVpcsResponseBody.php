<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs;
use AlibabaCloud\Tea\Model;

class DescribeVpcsResponseBody extends Model
{
    /**
     * @description The number of the returned page.
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
     * @description The ID of the request.
     *
     * @example C6532AA8-D0F7-497F-A8EE-094126D441F5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The details of the VPCs.
     *
     * @var vpcs
     */
    public $vpcs;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpcs'       => 'Vpcs',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpcs) {
            $res['Vpcs'] = null !== $this->vpcs ? $this->vpcs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcsResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Vpcs'])) {
            $model->vpcs = vpcs::fromMap($map['Vpcs']);
        }

        return $model;
    }
}
