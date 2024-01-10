<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataBackupSetRequest extends Model
{
    /**
     * @example tenant
     *
     * @var string
     */
    public $backupObjectType;

    /**
     * @example 2023-01-06T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

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

    /**
     * @example 2022-12-27T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example DONE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'backupObjectType' => 'BackupObjectType',
        'endTime'          => 'EndTime',
        'instanceId'       => 'InstanceId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupObjectType) {
            $res['BackupObjectType'] = $this->backupObjectType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeDataBackupSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupObjectType'])) {
            $model->backupObjectType = $map['BackupObjectType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
