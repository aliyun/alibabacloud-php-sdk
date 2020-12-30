<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponseBody\rescords;
use AlibabaCloud\Tea\Model;

class DescribeRestoreSummaryResponseBody extends Model
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
    public $total;

    /**
     * @var int
     */
    public $hasMoreRestoreRecord;

    /**
     * @var rescords
     */
    public $rescords;
    protected $_name = [
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
        'total'                => 'Total',
        'hasMoreRestoreRecord' => 'HasMoreRestoreRecord',
        'rescords'             => 'Rescords',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->hasMoreRestoreRecord) {
            $res['HasMoreRestoreRecord'] = $this->hasMoreRestoreRecord;
        }
        if (null !== $this->rescords) {
            $res['Rescords'] = null !== $this->rescords ? $this->rescords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreSummaryResponseBody
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['HasMoreRestoreRecord'])) {
            $model->hasMoreRestoreRecord = $map['HasMoreRestoreRecord'];
        }
        if (isset($map['Rescords'])) {
            $model->rescords = rescords::fromMap($map['Rescords']);
        }

        return $model;
    }
}
