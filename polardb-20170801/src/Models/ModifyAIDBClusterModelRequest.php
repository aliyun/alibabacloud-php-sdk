<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyAIDBClusterModelRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $displayModelName;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $restartMode;

    /**
     * @var int
     */
    public $workerBatchSize;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'displayModelName' => 'DisplayModelName',
        'dryRun' => 'DryRun',
        'modelName' => 'ModelName',
        'regionId' => 'RegionId',
        'restartMode' => 'RestartMode',
        'workerBatchSize' => 'WorkerBatchSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->displayModelName) {
            $res['DisplayModelName'] = $this->displayModelName;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->restartMode) {
            $res['RestartMode'] = $this->restartMode;
        }

        if (null !== $this->workerBatchSize) {
            $res['WorkerBatchSize'] = $this->workerBatchSize;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DisplayModelName'])) {
            $model->displayModelName = $map['DisplayModelName'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RestartMode'])) {
            $model->restartMode = $map['RestartMode'];
        }

        if (isset($map['WorkerBatchSize'])) {
            $model->workerBatchSize = $map['WorkerBatchSize'];
        }

        return $model;
    }
}
