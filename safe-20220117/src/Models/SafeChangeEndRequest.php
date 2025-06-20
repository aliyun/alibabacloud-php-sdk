<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;

class SafeChangeEndRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var int
     */
    public $changeEndTime;

    /**
     * @var string
     */
    public $changeResult;

    /**
     * @var int
     */
    public $curBatchNo;

    /**
     * @var string
     */
    public $executorEmpId;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var string
     */
    public $sourceOrderId;

    /**
     * @var int
     */
    public $totalBatchNo;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'changeEndTime' => 'ChangeEndTime',
        'changeResult' => 'ChangeResult',
        'curBatchNo' => 'CurBatchNo',
        'executorEmpId' => 'ExecutorEmpId',
        'reqTimestamp' => 'ReqTimestamp',
        'sourceOrderId' => 'SourceOrderId',
        'totalBatchNo' => 'TotalBatchNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->changeEndTime) {
            $res['ChangeEndTime'] = $this->changeEndTime;
        }

        if (null !== $this->changeResult) {
            $res['ChangeResult'] = $this->changeResult;
        }

        if (null !== $this->curBatchNo) {
            $res['CurBatchNo'] = $this->curBatchNo;
        }

        if (null !== $this->executorEmpId) {
            $res['ExecutorEmpId'] = $this->executorEmpId;
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->sourceOrderId) {
            $res['SourceOrderId'] = $this->sourceOrderId;
        }

        if (null !== $this->totalBatchNo) {
            $res['TotalBatchNo'] = $this->totalBatchNo;
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['ChangeEndTime'])) {
            $model->changeEndTime = $map['ChangeEndTime'];
        }

        if (isset($map['ChangeResult'])) {
            $model->changeResult = $map['ChangeResult'];
        }

        if (isset($map['CurBatchNo'])) {
            $model->curBatchNo = $map['CurBatchNo'];
        }

        if (isset($map['ExecutorEmpId'])) {
            $model->executorEmpId = $map['ExecutorEmpId'];
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['SourceOrderId'])) {
            $model->sourceOrderId = $map['SourceOrderId'];
        }

        if (isset($map['TotalBatchNo'])) {
            $model->totalBatchNo = $map['TotalBatchNo'];
        }

        return $model;
    }
}
