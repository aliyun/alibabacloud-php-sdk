<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelResponseBody\data\availablePaths;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelResponseBody\data\deployment;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelResponseBody\data\fallbackTargets;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelResponseBody\data\meta;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelResponseBody\data\slots;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateLogicalModelResponseBody\data\targets;

class data extends Model
{
    /**
     * @var availablePaths[]
     */
    public $availablePaths;

    /**
     * @var string
     */
    public $callStrategy;

    /**
     * @var deployment
     */
    public $deployment;

    /**
     * @var fallbackTargets[]
     */
    public $fallbackTargets;

    /**
     * @var mixed[]
     */
    public $features;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $logicalModelId;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $requiresActivation;

    /**
     * @var string
     */
    public $responseModel;

    /**
     * @var int
     */
    public $revision;

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
    public $updateTime;
    protected $_name = [
        'availablePaths' => 'availablePaths',
        'callStrategy' => 'callStrategy',
        'deployment' => 'deployment',
        'fallbackTargets' => 'fallbackTargets',
        'features' => 'features',
        'gatewayId' => 'gatewayId',
        'logicalModelId' => 'logicalModelId',
        'meta' => 'meta',
        'name' => 'name',
        'requiresActivation' => 'requiresActivation',
        'responseModel' => 'responseModel',
        'revision' => 'revision',
        'routingPolicy' => 'routingPolicy',
        'slots' => 'slots',
        'targets' => 'targets',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->availablePaths)) {
            Model::validateArray($this->availablePaths);
        }
        if (null !== $this->deployment) {
            $this->deployment->validate();
        }
        if (\is_array($this->fallbackTargets)) {
            Model::validateArray($this->fallbackTargets);
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (null !== $this->meta) {
            $this->meta->validate();
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
        if (null !== $this->availablePaths) {
            if (\is_array($this->availablePaths)) {
                $res['availablePaths'] = [];
                $n1 = 0;
                foreach ($this->availablePaths as $item1) {
                    $res['availablePaths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callStrategy) {
            $res['callStrategy'] = $this->callStrategy;
        }

        if (null !== $this->deployment) {
            $res['deployment'] = null !== $this->deployment ? $this->deployment->toArray($noStream) : $this->deployment;
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

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['features'] = [];
                foreach ($this->features as $key1 => $value1) {
                    $res['features'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->logicalModelId) {
            $res['logicalModelId'] = $this->logicalModelId;
        }

        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requiresActivation) {
            $res['requiresActivation'] = $this->requiresActivation;
        }

        if (null !== $this->responseModel) {
            $res['responseModel'] = $this->responseModel;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
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

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['availablePaths'])) {
            if (!empty($map['availablePaths'])) {
                $model->availablePaths = [];
                $n1 = 0;
                foreach ($map['availablePaths'] as $item1) {
                    $model->availablePaths[$n1] = availablePaths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['callStrategy'])) {
            $model->callStrategy = $map['callStrategy'];
        }

        if (isset($map['deployment'])) {
            $model->deployment = deployment::fromMap($map['deployment']);
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

        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = [];
                foreach ($map['features'] as $key1 => $value1) {
                    $model->features[$key1] = $value1;
                }
            }
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['logicalModelId'])) {
            $model->logicalModelId = $map['logicalModelId'];
        }

        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requiresActivation'])) {
            $model->requiresActivation = $map['requiresActivation'];
        }

        if (isset($map['responseModel'])) {
            $model->responseModel = $map['responseModel'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
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

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
