<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupResponseBody;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @example 2020010121****
     *
     * @var string
     */
    public $backupId;

    /**
     * @example Incremental
     *
     * @var string
     */
    public $backupType;

    /**
     * @example cds-bp11tjzh50****7v
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example {"name": "cds-uf6m0bod****6159-20200226", "start": "2020-02-26 01:57:05", "end": "2020-02-26 02:12:50", "completeNodes": ["cds-uf6m0bod4****159-1-core-002.cassandra.rds.aliyuncs.com", "cds-uf6m0bo****v6159-1-core-001.cassandra.rds.aliyuncs.com", "cds-uf6m0bod****6159-1-core-003.cassandra.rds.aliyuncs.com"], "incompleteNodes": [], "missingNodes": [], "files": 923, "size": 149016650}
     *
     * @var string
     */
    public $details;

    /**
     * @example 2020-01-01 21:48:54Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 149016650
     *
     * @var int
     */
    public $size;

    /**
     * @example 2020-01-01 21:48:40Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'backupId'     => 'BackupId',
        'backupType'   => 'BackupType',
        'clusterId'    => 'ClusterId',
        'dataCenterId' => 'DataCenterId',
        'details'      => 'Details',
        'endTime'      => 'EndTime',
        'size'         => 'Size',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
