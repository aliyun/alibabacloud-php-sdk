<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNetworkInterfacesResponseBody\networkInterfaces;
use AlibabaCloud\Tea\Model;

class DescribeUisNetworkInterfacesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var networkInterfaces
     */
    public $networkInterfaces;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
        'networkInterfaces' => 'NetworkInterfaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->networkInterfaces) {
            $res['NetworkInterfaces'] = null !== $this->networkInterfaces ? $this->networkInterfaces->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUisNetworkInterfacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['NetworkInterfaces'])) {
            $model->networkInterfaces = networkInterfaces::fromMap($map['NetworkInterfaces']);
        }

        return $model;
    }
}
