<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeBackupsResponseBody extends Model
{
    /**
     * @description The queried backup sets.
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
     * @description The number of backup sets on the current page.
     *
     * @example 30
     *
     * @var string
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example 1A6D328C-84B8-40DC-BF49-6C73984D7494
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The size of the snapshot chain of the instance. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $totalEcsSnapshotSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var string
     */
    public $totalRecordCount;
    protected $_name = [
        'items'                => 'Items',
        'pageNumber'           => 'PageNumber',
        'pageRecordCount'      => 'PageRecordCount',
        'requestId'            => 'RequestId',
        'totalEcsSnapshotSize' => 'TotalEcsSnapshotSize',
        'totalRecordCount'     => 'TotalRecordCount',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalEcsSnapshotSize) {
            $res['TotalEcsSnapshotSize'] = $this->totalEcsSnapshotSize;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalEcsSnapshotSize'])) {
            $model->totalEcsSnapshotSize = $map['TotalEcsSnapshotSize'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
