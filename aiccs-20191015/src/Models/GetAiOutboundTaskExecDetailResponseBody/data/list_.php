<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskExecDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $batchVersion;

    /**
     * @var string
     */
    public $bizData;

    /**
     * @var int
     */
    public $callCount;

    /**
     * @var int
     */
    public $caseId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $lastCallResult;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $statusDesc;
    protected $_name = [
        'batchVersion' => 'BatchVersion',
        'bizData' => 'BizData',
        'callCount' => 'CallCount',
        'caseId' => 'CaseId',
        'createTime' => 'CreateTime',
        'lastCallResult' => 'LastCallResult',
        'phoneNum' => 'PhoneNum',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
