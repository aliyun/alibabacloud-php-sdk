<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesResponseBody\backupRecords;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesResponseBody\tables;

class DescribeBackupTablesResponseBody extends Model
{
    /**
     * @var backupRecords
     */
    public $backupRecords;

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
     * @var tables
     */
    public $tables;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'backupRecords' => 'BackupRecords',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'tables' => 'Tables',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->backupRecords) {
            $this->backupRecords->validate();
        }
        if (null !== $this->tables) {
            $this->tables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRecords) {
            $res['BackupRecords'] = null !== $this->backupRecords ? $this->backupRecords->toArray($noStream) : $this->backupRecords;
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

        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toArray($noStream) : $this->tables;
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
        if (isset($map['BackupRecords'])) {
            $model->backupRecords = backupRecords::fromMap($map['BackupRecords']);
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

        if (isset($map['Tables'])) {
            $model->tables = tables::fromMap($map['Tables']);
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
