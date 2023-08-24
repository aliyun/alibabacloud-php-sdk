<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponseBody\node;
use AlibabaCloud\Tea\Model;

class DescribeRoleZoneInfoResponseBody extends Model
{
    /**
     * @description The role of the node. Valid values:
     *
     *   **master**: master node
     *   **slave**: replica node
     *
     * @var node
     */
    public $node;

    /**
     * @description The ID of the instance. You can call the [DescribeInstances](~~60933~~) operation to query instance IDs.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Indicates whether the bandwidth of the node is increased. Valid values:
     *
     *   **true**: The bandwidth of the node is not increased.
     *   **false**: The bandwidth of the node is increased.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is used only for internal maintenance of ApsaraDB for Redis instances.
     *
     * @example 224B97FB-A275-4EAC-86E9-8922FEA2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the node is a read replica. If the node is a read replica, **3** is returned.
     *
     * >  If the node is not a read replica, no value is returned.
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'node'       => 'Node',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->node) {
            $res['Node'] = null !== $this->node ? $this->node->toMap() : null;
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
     * @return DescribeRoleZoneInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Node'])) {
            $model->node = node::fromMap($map['Node']);
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
