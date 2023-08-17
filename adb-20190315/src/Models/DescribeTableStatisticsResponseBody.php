<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeTableStatisticsResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example am-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Details about table statistics.
     *
     * @var items
     */
    public $items;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 4C4433FF-5D3A-4C3E-A19C-6D93B2******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'items'       => 'Items',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
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
     * @return DescribeTableStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
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
