<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\resources\entitlementState;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\resources\modelGroups;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\resources\models;

class resources extends Model
{
    /**
     * @var bool
     */
    public $allModels;

    /**
     * @var bool
     */
    public $allTools;

    /**
     * @var string
     */
    public $consumerGroupName;

    /**
     * @var entitlementState
     */
    public $entitlementState;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var modelGroups[]
     */
    public $modelGroups;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $tools;
    protected $_name = [
        'allModels' => 'allModels',
        'allTools' => 'allTools',
        'consumerGroupName' => 'consumerGroupName',
        'entitlementState' => 'entitlementState',
        'expireTime' => 'expireTime',
        'modelGroups' => 'modelGroups',
        'models' => 'models',
        'name' => 'name',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (null !== $this->entitlementState) {
            $this->entitlementState->validate();
        }
        if (\is_array($this->modelGroups)) {
            Model::validateArray($this->modelGroups);
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allModels) {
            $res['allModels'] = $this->allModels;
        }

        if (null !== $this->allTools) {
            $res['allTools'] = $this->allTools;
        }

        if (null !== $this->consumerGroupName) {
            $res['consumerGroupName'] = $this->consumerGroupName;
        }

        if (null !== $this->entitlementState) {
            $res['entitlementState'] = null !== $this->entitlementState ? $this->entitlementState->toArray($noStream) : $this->entitlementState;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->modelGroups) {
            if (\is_array($this->modelGroups)) {
                $res['modelGroups'] = [];
                $n1 = 0;
                foreach ($this->modelGroups as $item1) {
                    $res['modelGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['allModels'])) {
            $model->allModels = $map['allModels'];
        }

        if (isset($map['allTools'])) {
            $model->allTools = $map['allTools'];
        }

        if (isset($map['consumerGroupName'])) {
            $model->consumerGroupName = $map['consumerGroupName'];
        }

        if (isset($map['entitlementState'])) {
            $model->entitlementState = entitlementState::fromMap($map['entitlementState']);
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['modelGroups'])) {
            if (!empty($map['modelGroups'])) {
                $model->modelGroups = [];
                $n1 = 0;
                foreach ($map['modelGroups'] as $item1) {
                    $model->modelGroups[$n1] = modelGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
