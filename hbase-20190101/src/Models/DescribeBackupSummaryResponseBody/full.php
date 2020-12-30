<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody\full\records;
use AlibabaCloud\Tea\Model;

class full extends Model
{
    /**
     * @var string
     */
    public $nextFullBackupDate;

    /**
     * @var records
     */
    public $records;

    /**
     * @var string
     */
    public $hasMore;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'nextFullBackupDate' => 'NextFullBackupDate',
        'records'            => 'Records',
        'hasMore'            => 'HasMore',
        'pageSize'           => 'PageSize',
        'pageNumber'         => 'PageNumber',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextFullBackupDate) {
            $res['NextFullBackupDate'] = $this->nextFullBackupDate;
        }
        if (null !== $this->records) {
            $res['Records'] = null !== $this->records ? $this->records->toMap() : null;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return full
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextFullBackupDate'])) {
            $model->nextFullBackupDate = $map['NextFullBackupDate'];
        }
        if (isset($map['Records'])) {
            $model->records = records::fromMap($map['Records']);
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
