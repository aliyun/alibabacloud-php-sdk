<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponseBody\instanceInfo;
use AlibabaCloud\Tea\Model;

class ListCacheReserveInstancesResponseBody extends Model
{
    /**
     * @description The cache reserve instances.
     *
     * @var instanceInfo[]
     */
    public $instanceInfo;

    /**
     * @description Page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, default **500**, range: **1~500**.
     *
     * @example 500
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Request ID.
     *
     * @example 65C66B7B-671A-8297-9187-2R5477247B76
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total count.
     *
     * @example 16
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Total pages.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'instanceInfo' => 'InstanceInfo',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = [];
            if (null !== $this->instanceInfo && \is_array($this->instanceInfo)) {
                $n = 0;
                foreach ($this->instanceInfo as $item) {
                    $res['InstanceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCacheReserveInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceInfo'])) {
            if (!empty($map['InstanceInfo'])) {
                $model->instanceInfo = [];
                $n = 0;
                foreach ($map['InstanceInfo'] as $item) {
                    $model->instanceInfo[$n++] = null !== $item ? instanceInfo::fromMap($item) : $item;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
