<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryResponseBody\fpShotNotaryList;

use AlibabaCloud\Tea\Model;

class fpShotNotary extends Model
{
    /**
     * @var string
     */
    public $transactionId;

    /**
     * @var string
     */
    public $txHash;

    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishTime;
    protected $_name = [
        'transactionId' => 'TransactionId',
        'txHash'        => 'TxHash',
        'fpDBId'        => 'FpDBId',
        'jobId'         => 'JobId',
        'detail'        => 'Detail',
        'creationTime'  => 'CreationTime',
        'finishTime'    => 'FinishTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }
        if (null !== $this->txHash) {
            $res['TxHash'] = $this->txHash;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotNotary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }
        if (isset($map['TxHash'])) {
            $model->txHash = $map['TxHash'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        return $model;
    }
}
