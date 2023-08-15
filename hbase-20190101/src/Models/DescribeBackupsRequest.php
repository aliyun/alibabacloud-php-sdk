<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupsRequest extends Model
{
    /**
     * @example job-xxxx
     *
     * @var string
     */
    public $backupId;

    /**
     * @example hb-t4naqsay5gn****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2020-12-23 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2020-12-23T15:59:59Z
     *
     * @var string
     */
    public $endTimeUTC;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 2020-12-13 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2020-12-12T16:00:00Z
     *
     * @var string
     */
    public $startTimeUTC;
    protected $_name = [
        'backupId'     => 'BackupId',
        'clusterId'    => 'ClusterId',
        'endTime'      => 'EndTime',
        'endTimeUTC'   => 'EndTimeUTC',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
        'startTimeUTC' => 'StartTimeUTC',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeUTC) {
            $res['EndTimeUTC'] = $this->endTimeUTC;
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
        if (null !== $this->startTimeUTC) {
            $res['StartTimeUTC'] = $this->startTimeUTC;
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
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeUTC'])) {
            $model->endTimeUTC = $map['EndTimeUTC'];
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
        if (isset($map['StartTimeUTC'])) {
            $model->startTimeUTC = $map['StartTimeUTC'];
        }

        return $model;
    }
}
