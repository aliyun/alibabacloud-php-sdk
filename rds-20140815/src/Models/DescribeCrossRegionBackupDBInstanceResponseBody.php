<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeCrossRegionBackupDBInstanceResponseBody extends Model
{
    /**
     * @description An array that consists of instances and their cross-region backup settings.
     *
     * @var items
     */
    public $items;

    /**
     * @description The total number of items returned for cross-region backup settings.
     *
     * @example 1
     *
     * @var int
     */
    public $itemsNumbers;

    /**
     * @description The page number of the returned page. Valid values: any non-zero positive integer.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 33517002-182D-40BE-93EC-610BD3381045
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 100
     *
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'items'        => 'Items',
        'itemsNumbers' => 'ItemsNumbers',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
        'requestId'    => 'RequestId',
        'totalRecords' => 'TotalRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->itemsNumbers) {
            $res['ItemsNumbers'] = $this->itemsNumbers;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCrossRegionBackupDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['ItemsNumbers'])) {
            $model->itemsNumbers = $map['ItemsNumbers'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }

        return $model;
    }
}
