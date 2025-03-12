<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\Tea\Model;

class fullTransferConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowDestTableNotEmpty;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $fullTransferSpeedMode;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $fullVerifySpeedMode;

    /**
     * @var string
     */
    public $hbaseObjCheckMode;

    /**
     * @var string
     */
    public $hbaseObjMigMode;

    /**
     * @var int
     */
    public $indexDDLConcurrencyLimit;

    /**
     * @var int
     */
    public $maxConcurrentIndexDDLs;

    /**
     * @example true
     *
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
        'allowDestTableNotEmpty'   => 'AllowDestTableNotEmpty',
        'fullTransferSpeedMode'    => 'FullTransferSpeedMode',
        'fullVerifySpeedMode'      => 'FullVerifySpeedMode',
        'hbaseObjCheckMode'        => 'HbaseObjCheckMode',
        'hbaseObjMigMode'          => 'HbaseObjMigMode',
        'indexDDLConcurrencyLimit' => 'IndexDDLConcurrencyLimit',
        'maxConcurrentIndexDDLs'   => 'MaxConcurrentIndexDDLs',
        'nonePkUkTruncateDstTable' => 'NonePkUkTruncateDstTable',
        'readWorkerNum'            => 'ReadWorkerNum',
        'throttleIOPS'             => 'ThrottleIOPS',
        'throttleRps'              => 'ThrottleRps',
        'writeWorkerNum'           => 'WriteWorkerNum',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->hbaseObjCheckMode) {
            $res['HbaseObjCheckMode'] = $this->hbaseObjCheckMode;
        }
        if (null !== $this->hbaseObjMigMode) {
            $res['HbaseObjMigMode'] = $this->hbaseObjMigMode;
        }
        if (null !== $this->indexDDLConcurrencyLimit) {
            $res['IndexDDLConcurrencyLimit'] = $this->indexDDLConcurrencyLimit;
        }
        if (null !== $this->maxConcurrentIndexDDLs) {
            $res['MaxConcurrentIndexDDLs'] = $this->maxConcurrentIndexDDLs;
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

    /**
     * @param array $map
     *
     * @return fullTransferConfig
     */
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
        if (isset($map['HbaseObjCheckMode'])) {
            $model->hbaseObjCheckMode = $map['HbaseObjCheckMode'];
        }
        if (isset($map['HbaseObjMigMode'])) {
            $model->hbaseObjMigMode = $map['HbaseObjMigMode'];
        }
        if (isset($map['IndexDDLConcurrencyLimit'])) {
            $model->indexDDLConcurrencyLimit = $map['IndexDDLConcurrencyLimit'];
        }
        if (isset($map['MaxConcurrentIndexDDLs'])) {
            $model->maxConcurrentIndexDDLs = $map['MaxConcurrentIndexDDLs'];
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
