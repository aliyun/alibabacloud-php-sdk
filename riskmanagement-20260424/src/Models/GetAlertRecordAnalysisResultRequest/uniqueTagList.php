<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultRequest;

use AlibabaCloud\Dara\Model;

class uniqueTagList extends Model
{
    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var bool
     */
    public $chooseLike;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $machineInstanceId;

    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'chooseLike' => 'ChooseLike',
        'ip' => 'Ip',
        'machineInstanceId' => 'MachineInstanceId',
        'queryTime' => 'QueryTime',
        'type' => 'Type',
        'uniqueInfo' => 'UniqueInfo',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }

        if (null !== $this->chooseLike) {
            $res['ChooseLike'] = $this->chooseLike;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->machineInstanceId) {
            $res['MachineInstanceId'] = $this->machineInstanceId;
        }

        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }

        if (isset($map['ChooseLike'])) {
            $model->chooseLike = $map['ChooseLike'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['MachineInstanceId'])) {
            $model->machineInstanceId = $map['MachineInstanceId'];
        }

        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
