<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models;

use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceListResponseBody\instanceList;
use AlibabaCloud\Tea\Model;

class DescribeHiTSDBInstanceListResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The status of the instance. Valid values: ACTIVATION, CREATING, NET_CREATING, CLASS_CHANGING, LOCKED, and DELETED. ACTIVATION: The instance is running. CREATING: The instance is being created. NET_CREATING: A network connection is being established. CLASS_CHANGING: The configuration of the instance is being modified. LOCKED: The instance is locked. DELETED: The instance is deleted.
     *
     * @var instanceList[]
     */
    public $instanceList;

    /**
     * @description The number of instances returned on each page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The total number of returned instances.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The page number of the returned page.
     *
     * @example 0A7153E4-8354-497E-87E5-5D0EBEF5AEB1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of queried instances.
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'instanceList'       => 'InstanceList',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['InstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHiTSDBInstanceListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['InstanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? instanceList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
