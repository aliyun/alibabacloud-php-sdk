<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetGpuClusterListAlarmRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmCluster;

    /**
     * @var mixed
     */
    public $alarmExtInfo;

    /**
     * @var string
     */
    public $alarmId;

    /**
     * @var string
     */
    public $alarmLog;

    /**
     * @var string
     */
    public $alarmTask;

    /**
     * @var string
     */
    public $alarmTime;

    /**
     * @var mixed
     */
    public $alarmTopology;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'alarmCluster' => 'alarmCluster',
        'alarmExtInfo' => 'alarmExtInfo',
        'alarmId' => 'alarmId',
        'alarmLog' => 'alarmLog',
        'alarmTask' => 'alarmTask',
        'alarmTime' => 'alarmTime',
        'alarmTopology' => 'alarmTopology',
        'alarmType' => 'alarmType',
        'status' => 'status',
        'uid' => 'uid',
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

        if (null !== $this->alarmId) {
            $res['alarmId'] = $this->alarmId;
        }

        if (null !== $this->alarmLog) {
            $res['alarmLog'] = $this->alarmLog;
        }

        if (null !== $this->alarmTask) {
            $res['alarmTask'] = $this->alarmTask;
        }

        if (null !== $this->alarmTime) {
            $res['alarmTime'] = $this->alarmTime;
        }

        if (null !== $this->alarmTopology) {
            $res['alarmTopology'] = $this->alarmTopology;
        }

        if (null !== $this->alarmType) {
            $res['alarmType'] = $this->alarmType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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

        if (isset($map['alarmId'])) {
            $model->alarmId = $map['alarmId'];
        }

        if (isset($map['alarmLog'])) {
            $model->alarmLog = $map['alarmLog'];
        }

        if (isset($map['alarmTask'])) {
            $model->alarmTask = $map['alarmTask'];
        }

        if (isset($map['alarmTime'])) {
            $model->alarmTime = $map['alarmTime'];
        }

        if (isset($map['alarmTopology'])) {
            $model->alarmTopology = $map['alarmTopology'];
        }

        if (isset($map['alarmType'])) {
            $model->alarmType = $map['alarmType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
