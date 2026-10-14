<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetGpuClusterListAlarmRecordRequest extends Model
{
    /**
     * @var string
     */
    public $alarmCluster;

    /**
     * @var string
     */
    public $alarmExtInfo;

    /**
     * @var string
     */
    public $alarmTask;

    /**
     * @var string
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var int
     */
    public $current;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alarmCluster' => 'alarmCluster',
        'alarmExtInfo' => 'alarmExtInfo',
        'alarmTask' => 'alarmTask',
        'alarmTime' => 'alarmTime',
        'alarmType' => 'alarmType',
        'current' => 'current',
        'pageSize' => 'pageSize',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmCluster) {
            $res['alarmCluster'] = $this->alarmCluster;
        }

        if (null !== $this->alarmExtInfo) {
            $res['alarmExtInfo'] = $this->alarmExtInfo;
        }

        if (null !== $this->alarmTask) {
            $res['alarmTask'] = $this->alarmTask;
        }

        if (null !== $this->alarmTime) {
            $res['alarmTime'] = $this->alarmTime;
        }

        if (null !== $this->alarmType) {
            $res['alarmType'] = $this->alarmType;
        }

        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['alarmCluster'])) {
            $model->alarmCluster = $map['alarmCluster'];
        }

        if (isset($map['alarmExtInfo'])) {
            $model->alarmExtInfo = $map['alarmExtInfo'];
        }

        if (isset($map['alarmTask'])) {
            $model->alarmTask = $map['alarmTask'];
        }

        if (isset($map['alarmTime'])) {
            $model->alarmTime = $map['alarmTime'];
        }

        if (isset($map['alarmType'])) {
            $model->alarmType = $map['alarmType'];
        }

        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
