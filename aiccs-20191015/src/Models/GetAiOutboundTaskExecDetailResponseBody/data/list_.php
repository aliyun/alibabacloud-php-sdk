<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskExecDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $batchVersion;

    /**
     * @example 123
     *
     * @var string
     */
    public $bizData;

    /**
     * @example 1
     *
     * @var int
     */
    public $callCount;

    /**
     * @example 123456
     *
     * @var int
     */
    public $caseId;

    /**
     * @example 1632289999000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 未接通
     *
     * @var string
     */
    public $lastCallResult;

    /**
     * @example 150****0000
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 待呼叫
     *
     * @var int
     */
    public $statusDesc;
    protected $_name = [
        'batchVersion'   => 'BatchVersion',
        'bizData'        => 'BizData',
        'callCount'      => 'CallCount',
        'caseId'         => 'CaseId',
        'createTime'     => 'CreateTime',
        'lastCallResult' => 'LastCallResult',
        'phoneNum'       => 'PhoneNum',
        'status'         => 'Status',
        'statusDesc'     => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchVersion) {
            $res['BatchVersion'] = $this->batchVersion;
        }
        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
        }
        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastCallResult) {
            $res['LastCallResult'] = $this->lastCallResult;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchVersion'])) {
            $model->batchVersion = $map['BatchVersion'];
        }
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }
        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastCallResult'])) {
            $model->lastCallResult = $map['LastCallResult'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
