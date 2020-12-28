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
     * @var networkInterfacePermissions[]
     */
    public $networkInterfacePermissions;
    protected $_name = [
        'totalCount'                  => 'TotalCount',
        'pageSize'                    => 'PageSize',
        'requestId'                   => 'RequestId',
        'pageNumber'                  => 'PageNumber',
        'networkInterfacePermissions' => 'NetworkInterfacePermissions',
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
        if (null !== $this->networkInterfacePermissions) {
            $res['NetworkInterfacePermissions'] = [];
            if (null !== $this->networkInterfacePermissions && \is_array($this->networkInterfacePermissions)) {
                $n = 0;
                foreach ($this->networkInterfacePermissions as $item) {
                    $res['NetworkInterfacePermissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NetworkInterfacePermissions'])) {
            if (!empty($map['NetworkInterfacePermissions'])) {
                $model->networkInterfacePermissions = [];
                $n                                  = 0;
                foreach ($map['NetworkInterfacePermissions'] as $item) {
                    $model->networkInterfacePermissions[$n++] = null !== $item ? networkInterfacePermissions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
