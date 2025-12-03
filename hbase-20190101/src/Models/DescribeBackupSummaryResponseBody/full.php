<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody\full\records;

class full extends Model
{
    /**
     * @var string
     */
    public $hasMore;

    /**
     * @var string
     */
    public $nextFullBackupDate;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var records
     */
    public $records;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'hasMore' => 'HasMore',
        'nextFullBackupDate' => 'NextFullBackupDate',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'records' => 'Records',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->records) {
            $this->records->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->nextFullBackupDate) {
            $res['NextFullBackupDate'] = $this->nextFullBackupDate;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->records) {
            $res['Records'] = null !== $this->records ? $this->records->toArray($noStream) : $this->records;
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
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['NextFullBackupDate'])) {
            $model->nextFullBackupDate = $map['NextFullBackupDate'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Records'])) {
            $model->records = records::fromMap($map['Records']);
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
