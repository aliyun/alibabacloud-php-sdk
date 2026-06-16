<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class uniqueTagList extends Model
{
    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $analysisCode;

    /**
     * @var string
     */
    public $analysisResult;

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
        'aliUid' => 'AliUid',
        'analysisCode' => 'AnalysisCode',
        'analysisResult' => 'AnalysisResult',
        'chooseLike' => 'ChooseLike',
        'ip' => 'Ip',
        'machineInstanceId' => 'MachineInstanceId',
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

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->analysisCode) {
            $res['AnalysisCode'] = $this->analysisCode;
        }

        if (null !== $this->analysisResult) {
            $res['AnalysisResult'] = $this->analysisResult;
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

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AnalysisCode'])) {
            $model->analysisCode = $map['AnalysisCode'];
        }

        if (isset($map['AnalysisResult'])) {
            $model->analysisResult = $map['AnalysisResult'];
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
