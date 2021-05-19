<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetCallsPerDayResponseBody\data;

use AlibabaCloud\Tea\Model;

class callsPerdayResponseList extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $hourId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var string
     */
    public $callOutCnt;

    /**
     * @var string
     */
    public $callInCnt;

    /**
     * @var string
     */
    public $minuteId;
    protected $_name = [
        'dataId'     => 'DataId',
        'hourId'     => 'HourId',
        'tenantId'   => 'TenantId',
        'tenantName' => 'TenantName',
        'phoneNum'   => 'PhoneNum',
        'callOutCnt' => 'CallOutCnt',
        'callInCnt'  => 'CallInCnt',
        'minuteId'   => 'MinuteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->hourId) {
            $res['HourId'] = $this->hourId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->callOutCnt) {
            $res['CallOutCnt'] = $this->callOutCnt;
        }
        if (null !== $this->callInCnt) {
            $res['CallInCnt'] = $this->callInCnt;
        }
        if (null !== $this->minuteId) {
            $res['MinuteId'] = $this->minuteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callsPerdayResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['HourId'])) {
            $model->hourId = $map['HourId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['CallOutCnt'])) {
            $model->callOutCnt = $map['CallOutCnt'];
        }
        if (isset($map['CallInCnt'])) {
            $model->callInCnt = $map['CallInCnt'];
        }
        if (isset($map['MinuteId'])) {
            $model->minuteId = $map['MinuteId'];
        }

        return $model;
    }
}
