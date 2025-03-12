<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddPublishBatchRequest extends Model
{
    /**
     * @description The name of the release batch.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $batchName;

    /**
     * @description The interval between two release batches.
     *
     * This parameter is required.
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The dimension based on which the asset is selected. Valid values:
     *
     *   **0**: selects the asset by instance.
     *   **1**: selects the asset by machine group.
     *   **2**: selects the asset by the ID of the instance that is deployed in the virtual private cloud (VPC).
     *
     * @example 0
     *
     * @var int
     */
    public $operationBase;

    /**
     * @description The version to which you want to upgrade the agent.
     *
     * This parameter is required.
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
