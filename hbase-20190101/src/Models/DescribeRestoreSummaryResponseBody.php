<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponseBody\rescords;

class DescribeRestoreSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $hasMoreRestoreRecord;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rescords
     */
    public $rescords;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'hasMoreRestoreRecord' => 'HasMoreRestoreRecord',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'rescords' => 'Rescords',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->rescords) {
            $this->rescords->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMoreRestoreRecord) {
            $res['HasMoreRestoreRecord'] = $this->hasMoreRestoreRecord;
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

        if (null !== $this->rescords) {
            $res['Rescords'] = null !== $this->rescords ? $this->rescords->toArray($noStream) : $this->rescords;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasMoreRestoreRecord'])) {
            $model->hasMoreRestoreRecord = $map['HasMoreRestoreRecord'];
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

        if (isset($map['Rescords'])) {
            $model->rescords = rescords::fromMap($map['Rescords']);
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
