<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTimeUTC;

    /**
     * @var string
     */
    public $endTimeUTC;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'backupId'     => 'BackupId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'startTimeUTC' => 'StartTimeUTC',
        'endTimeUTC'   => 'EndTimeUTC',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTimeUTC) {
            $res['StartTimeUTC'] = $this->startTimeUTC;
        }
        if (null !== $this->endTimeUTC) {
            $res['EndTimeUTC'] = $this->endTimeUTC;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTimeUTC'])) {
            $model->startTimeUTC = $map['StartTimeUTC'];
        }
        if (isset($map['EndTimeUTC'])) {
            $model->endTimeUTC = $map['EndTimeUTC'];
        }

        return $model;
    }
}
