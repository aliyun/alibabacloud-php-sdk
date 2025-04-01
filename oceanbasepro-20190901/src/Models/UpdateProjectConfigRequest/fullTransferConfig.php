<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest;

use AlibabaCloud\Dara\Model;

class fullTransferConfig extends Model
{
    /**
     * @var int
     */
    public $indexDDLConcurrencyLimit;

    /**
     * @var int
     */
    public $maxConcurrentIndexDDLs;

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
        'indexDDLConcurrencyLimit' => 'IndexDDLConcurrencyLimit',
        'maxConcurrentIndexDDLs' => 'MaxConcurrentIndexDDLs',
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
        if (null !== $this->indexDDLConcurrencyLimit) {
            $res['IndexDDLConcurrencyLimit'] = $this->indexDDLConcurrencyLimit;
        }

        if (null !== $this->maxConcurrentIndexDDLs) {
            $res['MaxConcurrentIndexDDLs'] = $this->maxConcurrentIndexDDLs;
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
        if (isset($map['IndexDDLConcurrencyLimit'])) {
            $model->indexDDLConcurrencyLimit = $map['IndexDDLConcurrencyLimit'];
        }

        if (isset($map['MaxConcurrentIndexDDLs'])) {
            $model->maxConcurrentIndexDDLs = $map['MaxConcurrentIndexDDLs'];
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
