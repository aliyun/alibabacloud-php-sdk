<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs;
use AlibabaCloud\Tea\Model;

class DescribeChangeLogsResponseBody extends Model
{
    /**
     * @description The operation logs.
     *
     * @var changeLogs
     */
    public $changeLogs;

    /**
     * @description The page number.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example F0FCB52A-D512-41A0-8595-40234EDCFD8B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalItems;

    /**
     * @description The total number of pages.
     *
     * @example 100
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'changeLogs' => 'ChangeLogs',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalItems' => 'TotalItems',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeLogs) {
            $res['ChangeLogs'] = null !== $this->changeLogs ? $this->changeLogs->toMap() : null;
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
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChangeLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeLogs'])) {
            $model->changeLogs = changeLogs::fromMap($map['ChangeLogs']);
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
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
