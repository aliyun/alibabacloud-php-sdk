<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponseBody\networkInterfacePermissions;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInterfacePermissionsResponseBody extends Model
{
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
     * @var int
     */
    public $totalCount;

    /**
     * @var networkInterfacePermissions
     */
    public $networkInterfacePermissions;
    protected $_name = [
        'pageSize'                    => 'PageSize',
        'requestId'                   => 'RequestId',
        'pageNumber'                  => 'PageNumber',
        'totalCount'                  => 'TotalCount',
        'networkInterfacePermissions' => 'NetworkInterfacePermissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->networkInterfacePermissions) {
            $res['NetworkInterfacePermissions'] = null !== $this->networkInterfacePermissions ? $this->networkInterfacePermissions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInterfacePermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NetworkInterfacePermissions'])) {
            $model->networkInterfacePermissions = networkInterfacePermissions::fromMap($map['NetworkInterfacePermissions']);
        }

        return $model;
    }
}
