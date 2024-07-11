<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupTablesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2020110302xxxx
     *
     * @var string
     */
    public $backupRecordId;

    /**
     * @description This parameter is required.
     *
     * @example ld-m5eznlga4k5bcxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'backupRecordId' => 'BackupRecordId',
        'clusterId'      => 'ClusterId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRecordId) {
            $res['BackupRecordId'] = $this->backupRecordId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRecordId'])) {
            $model->backupRecordId = $map['BackupRecordId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
