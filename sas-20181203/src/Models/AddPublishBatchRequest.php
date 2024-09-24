<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddPublishBatchRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $batchName;

    /**
     * @description This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @example 0
     *
     * @var int
     */
    public $operationBase;

    /**
     * @description This parameter is required.
     *
     * @example 0.0.9
     *
     * @var string
     */
    public $upgradeVersion;
    protected $_name = [
        'batchName'      => 'BatchName',
        'interval'       => 'Interval',
        'operationBase'  => 'OperationBase',
        'upgradeVersion' => 'UpgradeVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchName) {
            $res['BatchName'] = $this->batchName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->operationBase) {
            $res['OperationBase'] = $this->operationBase;
        }
        if (null !== $this->upgradeVersion) {
            $res['UpgradeVersion'] = $this->upgradeVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPublishBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchName'])) {
            $model->batchName = $map['BatchName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OperationBase'])) {
            $model->operationBase = $map['OperationBase'];
        }
        if (isset($map['UpgradeVersion'])) {
            $model->upgradeVersion = $map['UpgradeVersion'];
        }

        return $model;
    }
}
