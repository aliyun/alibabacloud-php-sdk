<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddPublishBatchRequest extends Model
{
    /**
     * @var string
     */
    public $batchName;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var int
     */
    public $operationBase;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
