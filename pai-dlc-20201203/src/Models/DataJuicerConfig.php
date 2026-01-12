<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class DataJuicerConfig extends Model
{
    /**
     * @var string
     */
    public $commandType;

    /**
     * @var bool
     */
    public $enableResourceEstimation;

    /**
     * @var string
     */
    public $executionMode;

    /**
     * @var ResourceLimit
     */
    public $resourceLimit;
    protected $_name = [
        'commandType' => 'CommandType',
        'enableResourceEstimation' => 'EnableResourceEstimation',
        'executionMode' => 'ExecutionMode',
        'resourceLimit' => 'ResourceLimit',
    ];

    public function validate()
    {
        if (null !== $this->resourceLimit) {
            $this->resourceLimit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }

        if (null !== $this->enableResourceEstimation) {
            $res['EnableResourceEstimation'] = $this->enableResourceEstimation;
        }

        if (null !== $this->executionMode) {
            $res['ExecutionMode'] = $this->executionMode;
        }

        if (null !== $this->resourceLimit) {
            $res['ResourceLimit'] = null !== $this->resourceLimit ? $this->resourceLimit->toArray($noStream) : $this->resourceLimit;
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
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }

        if (isset($map['EnableResourceEstimation'])) {
            $model->enableResourceEstimation = $map['EnableResourceEstimation'];
        }

        if (isset($map['ExecutionMode'])) {
            $model->executionMode = $map['ExecutionMode'];
        }

        if (isset($map['ResourceLimit'])) {
            $model->resourceLimit = ResourceLimit::fromMap($map['ResourceLimit']);
        }

        return $model;
    }
}
