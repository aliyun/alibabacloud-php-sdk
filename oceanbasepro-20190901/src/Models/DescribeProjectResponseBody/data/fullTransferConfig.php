<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data;

use AlibabaCloud\Dara\Model;

class fullTransferConfig extends Model
{
    /**
     * @var bool
     */
    public $allowDestTableNotEmpty;

    /**
     * @var string
     */
    public $fullTransferSpeedMode;

    /**
     * @var string
     */
    public $fullVerifySpeedMode;

    /**
     * @var bool
     */
    public $nonePkUkTruncateDstTable;

    /**
     * @var int
     */
    public $readWorkerNum;

    /**
     * @var int
     */
    public $throttleIOPS;

    /**
     * @var int
     */
    public $throttleRps;

    /**
     * @var int
     */
    public $writeWorkerNum;
    protected $_name = [
        'allowDestTableNotEmpty' => 'AllowDestTableNotEmpty',
        'fullTransferSpeedMode' => 'FullTransferSpeedMode',
        'fullVerifySpeedMode' => 'FullVerifySpeedMode',
        'nonePkUkTruncateDstTable' => 'NonePkUkTruncateDstTable',
        'readWorkerNum' => 'ReadWorkerNum',
        'throttleIOPS' => 'ThrottleIOPS',
        'throttleRps' => 'ThrottleRps',
        'writeWorkerNum' => 'WriteWorkerNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowDestTableNotEmpty) {
            $res['AllowDestTableNotEmpty'] = $this->allowDestTableNotEmpty;
        }

        if (null !== $this->fullTransferSpeedMode) {
            $res['FullTransferSpeedMode'] = $this->fullTransferSpeedMode;
        }

        if (null !== $this->fullVerifySpeedMode) {
            $res['FullVerifySpeedMode'] = $this->fullVerifySpeedMode;
        }

        if (null !== $this->nonePkUkTruncateDstTable) {
            $res['NonePkUkTruncateDstTable'] = $this->nonePkUkTruncateDstTable;
        }

        if (null !== $this->readWorkerNum) {
            $res['ReadWorkerNum'] = $this->readWorkerNum;
        }

        if (null !== $this->throttleIOPS) {
            $res['ThrottleIOPS'] = $this->throttleIOPS;
        }

        if (null !== $this->throttleRps) {
            $res['ThrottleRps'] = $this->throttleRps;
        }

        if (null !== $this->writeWorkerNum) {
            $res['WriteWorkerNum'] = $this->writeWorkerNum;
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
        if (isset($map['AllowDestTableNotEmpty'])) {
            $model->allowDestTableNotEmpty = $map['AllowDestTableNotEmpty'];
        }

        if (isset($map['FullTransferSpeedMode'])) {
            $model->fullTransferSpeedMode = $map['FullTransferSpeedMode'];
        }

        if (isset($map['FullVerifySpeedMode'])) {
            $model->fullVerifySpeedMode = $map['FullVerifySpeedMode'];
        }

        if (isset($map['NonePkUkTruncateDstTable'])) {
            $model->nonePkUkTruncateDstTable = $map['NonePkUkTruncateDstTable'];
        }

        if (isset($map['ReadWorkerNum'])) {
            $model->readWorkerNum = $map['ReadWorkerNum'];
        }

        if (isset($map['ThrottleIOPS'])) {
            $model->throttleIOPS = $map['ThrottleIOPS'];
        }

        if (isset($map['ThrottleRps'])) {
            $model->throttleRps = $map['ThrottleRps'];
        }

        if (isset($map['WriteWorkerNum'])) {
            $model->writeWorkerNum = $map['WriteWorkerNum'];
        }

        return $model;
    }
}
