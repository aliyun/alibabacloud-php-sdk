<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class incr extends Model
{
    /**
     * @example 266 B
     *
     * @var string
     */
    public $backupLogSize;

    /**
     * @example 2020-11-05T01:20:31Z
     *
     * @var string
     */
    public $pos;

    /**
     * @example 0
     *
     * @var string
     */
    public $queueLogNum;

    /**
     * @example 2
     *
     * @var string
     */
    public $runningLogNum;

    /**
     * @example 0.00 MB/s
     *
     * @var string
     */
    public $speed;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'backupLogSize' => 'BackupLogSize',
        'pos'           => 'Pos',
        'queueLogNum'   => 'QueueLogNum',
        'runningLogNum' => 'RunningLogNum',
        'speed'         => 'Speed',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
        }
        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }
        if (null !== $this->queueLogNum) {
            $res['QueueLogNum'] = $this->queueLogNum;
        }
        if (null !== $this->runningLogNum) {
            $res['RunningLogNum'] = $this->runningLogNum;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return incr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
        }
        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }
        if (isset($map['QueueLogNum'])) {
            $model->queueLogNum = $map['QueueLogNum'];
        }
        if (isset($map['RunningLogNum'])) {
            $model->runningLogNum = $map['RunningLogNum'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
