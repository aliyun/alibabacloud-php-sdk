<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelRequest\fallbackTargets;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelRequest\slots;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelRequest\targets;

class UpdateLogicalModelRequest extends Model
{
    /**
     * @var string
     */
    public $callStrategy;

    /**
     * @var fallbackTargets[]
     */
    public $fallbackTargets;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $responseModel;

    /**
     * @var string
     */
    public $routingPolicy;

    /**
     * @var slots
     */
    public $slots;

    /**
     * @var targets[]
     */
    public $targets;

    /**
     * @var string
     */
    public $confirmationToken;

    /**
     * @var int
     */
    public $expectedRevision;
    protected $_name = [
        'callStrategy' => 'callStrategy',
        'fallbackTargets' => 'fallbackTargets',
        'name' => 'name',
        'responseModel' => 'responseModel',
        'routingPolicy' => 'routingPolicy',
        'slots' => 'slots',
        'targets' => 'targets',
        'confirmationToken' => 'confirmationToken',
        'expectedRevision' => 'expectedRevision',
    ];

    public function validate()
    {
        if (\is_array($this->fallbackTargets)) {
            Model::validateArray($this->fallbackTargets);
        }
        if (null !== $this->slots) {
            $this->slots->validate();
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callStrategy) {
            $res['callStrategy'] = $this->callStrategy;
        }

        if (null !== $this->fallbackTargets) {
            if (\is_array($this->fallbackTargets)) {
                $res['fallbackTargets'] = [];
                $n1 = 0;
                foreach ($this->fallbackTargets as $item1) {
                    $res['fallbackTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->responseModel) {
            $res['responseModel'] = $this->responseModel;
        }

        if (null !== $this->routingPolicy) {
            $res['routingPolicy'] = $this->routingPolicy;
        }

        if (null !== $this->slots) {
            $res['slots'] = null !== $this->slots ? $this->slots->toArray($noStream) : $this->slots;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['targets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->confirmationToken) {
            $res['confirmationToken'] = $this->confirmationToken;
        }

        if (null !== $this->expectedRevision) {
            $res['expectedRevision'] = $this->expectedRevision;
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
        if (isset($map['callStrategy'])) {
            $model->callStrategy = $map['callStrategy'];
        }

        if (isset($map['fallbackTargets'])) {
            if (!empty($map['fallbackTargets'])) {
                $model->fallbackTargets = [];
                $n1 = 0;
                foreach ($map['fallbackTargets'] as $item1) {
                    $model->fallbackTargets[$n1] = fallbackTargets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['responseModel'])) {
            $model->responseModel = $map['responseModel'];
        }

        if (isset($map['routingPolicy'])) {
            $model->routingPolicy = $map['routingPolicy'];
        }

        if (isset($map['slots'])) {
            $model->slots = slots::fromMap($map['slots']);
        }

        if (isset($map['targets'])) {
            if (!empty($map['targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['targets'] as $item1) {
                    $model->targets[$n1] = targets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['confirmationToken'])) {
            $model->confirmationToken = $map['confirmationToken'];
        }

        if (isset($map['expectedRevision'])) {
            $model->expectedRevision = $map['expectedRevision'];
        }

        return $model;
    }
}
