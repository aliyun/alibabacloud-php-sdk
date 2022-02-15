<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeLogBackupsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $logFileName;

    /**
     * @var int
     */
    public $logFileSize;

    /**
     * @var string
     */
    public $logTime;

    /**
     * @var string
     */
    public $segmentName;
    protected $_name = [
        'backupId'     => 'BackupId',
        'DBInstanceId' => 'DBInstanceId',
        'logFileName'  => 'LogFileName',
        'logFileSize'  => 'LogFileSize',
        'logTime'      => 'LogTime',
        'segmentName'  => 'SegmentName',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }
        if (null !== $this->logFileSize) {
            $res['LogFileSize'] = $this->logFileSize;
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }
        if (null !== $this->segmentName) {
            $res['SegmentName'] = $this->segmentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }
        if (isset($map['LogFileSize'])) {
            $model->logFileSize = $map['LogFileSize'];
        }
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }
        if (isset($map['SegmentName'])) {
            $model->segmentName = $map['SegmentName'];
        }

        return $model;
    }
}
