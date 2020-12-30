<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class incr extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var string
     */
    public $pos;

    /**
     * @var string
     */
    public $queueLogNum;

    /**
     * @var string
     */
    public $backupLogSize;

    /**
     * @var string
     */
    public $runningLogNum;
    protected $_name = [
        'status'        => 'Status',
        'speed'         => 'Speed',
        'pos'           => 'Pos',
        'queueLogNum'   => 'QueueLogNum',
        'backupLogSize' => 'BackupLogSize',
        'runningLogNum' => 'RunningLogNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }
        if (null !== $this->queueLogNum) {
            $res['QueueLogNum'] = $this->queueLogNum;
        }
        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
        }
        if (null !== $this->runningLogNum) {
            $res['RunningLogNum'] = $this->runningLogNum;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }
        if (isset($map['QueueLogNum'])) {
            $model->queueLogNum = $map['QueueLogNum'];
        }
        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
        }
        if (isset($map['RunningLogNum'])) {
            $model->runningLogNum = $map['RunningLogNum'];
        }

        return $model;
    }
}
