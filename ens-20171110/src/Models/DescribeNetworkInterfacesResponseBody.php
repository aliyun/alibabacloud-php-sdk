<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets;
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
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Maximum value: **50**. Default value: **10**.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 708AF9CE-FF92-5DF9-93F8-B7754AB1061A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries in the list.
     *
     * @example 49
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkInterfaceSets' => 'NetworkInterfaceSets',
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
