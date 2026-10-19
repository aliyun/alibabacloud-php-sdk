<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ResizeAIDBClusterModelResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentCapacity;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var int
     */
    public $poolHitCapacity;

    /**
     * @var float
     */
    public $poolHitRatio;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $requiredDelta;

    /**
     * @var int
     */
    public $targetCapacity;
    protected $_name = [
        'currentCapacity' => 'CurrentCapacity',
        'DBClusterId' => 'DBClusterId',
        'dryRun' => 'DryRun',
        'poolHitCapacity' => 'PoolHitCapacity',
        'poolHitRatio' => 'PoolHitRatio',
        'requestId' => 'RequestId',
        'requiredDelta' => 'RequiredDelta',
        'targetCapacity' => 'TargetCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentCapacity) {
            $res['CurrentCapacity'] = $this->currentCapacity;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->poolHitCapacity) {
            $res['PoolHitCapacity'] = $this->poolHitCapacity;
        }

        if (null !== $this->poolHitRatio) {
            $res['PoolHitRatio'] = $this->poolHitRatio;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requiredDelta) {
            $res['RequiredDelta'] = $this->requiredDelta;
        }

        if (null !== $this->targetCapacity) {
            $res['TargetCapacity'] = $this->targetCapacity;
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
        if (isset($map['CurrentCapacity'])) {
            $model->currentCapacity = $map['CurrentCapacity'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['PoolHitCapacity'])) {
            $model->poolHitCapacity = $map['PoolHitCapacity'];
        }

        if (isset($map['PoolHitRatio'])) {
            $model->poolHitRatio = $map['PoolHitRatio'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequiredDelta'])) {
            $model->requiredDelta = $map['RequiredDelta'];
        }

        if (isset($map['TargetCapacity'])) {
            $model->targetCapacity = $map['TargetCapacity'];
        }

        return $model;
    }
}
