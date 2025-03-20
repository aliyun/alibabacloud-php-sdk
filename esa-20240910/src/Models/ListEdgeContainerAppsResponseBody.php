<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsResponseBody\apps;
use AlibabaCloud\Tea\Model;

class ListEdgeContainerAppsResponseBody extends Model
{
    /**
     * @description The queried applications.
     *
     * @var apps[]
     */
    public $apps;

    /**
     * @description The page number. Default value: **1**. Valid values: 1 to 65535.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 500.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 2430E05E-1340-5773-B5E1-B743929F46F2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apps' => 'Apps',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apps) {
            $res['Apps'] = [];
            if (null !== $this->apps && \is_array($this->apps)) {
                $n = 0;
                foreach ($this->apps as $item) {
                    $res['Apps'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEdgeContainerAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n = 0;
                foreach ($map['Apps'] as $item) {
                    $model->apps[$n++] = null !== $item ? apps::fromMap($item) : $item;
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

        return $model;
    }
}
