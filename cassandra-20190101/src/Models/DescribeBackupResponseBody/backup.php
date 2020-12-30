<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupResponseBody;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'endTime'      => 'EndTime',
        'status'       => 'Status',
        'startTime'    => 'StartTime',
        'size'         => 'Size',
        'backupType'   => 'BackupType',
        'backupId'     => 'BackupId',
        'details'      => 'Details',
        'dataCenterId' => 'DataCenterId',
        'clusterId'    => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
