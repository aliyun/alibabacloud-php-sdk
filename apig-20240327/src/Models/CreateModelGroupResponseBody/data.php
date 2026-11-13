<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateModelGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateModelGroupResponseBody\data\configurationDeployment;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateModelGroupResponseBody\data\entitlementState;

class data extends Model
{
    /**
     * @var configurationDeployment
     */
    public $configurationDeployment;

    /**
     * @var string
     */
    public $description;

    /**
     * @var entitlementState
     */
    public $entitlementState;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string[]
     */
    public $modelCardIds;

    /**
     * @var string
     */
    public $modelGroupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'configurationDeployment' => 'configurationDeployment',
        'description' => 'description',
        'entitlementState' => 'entitlementState',
        'gatewayId' => 'gatewayId',
        'modelCardIds' => 'modelCardIds',
        'modelGroupId' => 'modelGroupId',
        'name' => 'name',
        'updateTime' => 'updateTime',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->configurationDeployment) {
            $this->configurationDeployment->validate();
        }
        if (null !== $this->entitlementState) {
            $this->entitlementState->validate();
        }
        if (\is_array($this->modelCardIds)) {
            Model::validateArray($this->modelCardIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationDeployment) {
            $res['configurationDeployment'] = null !== $this->configurationDeployment ? $this->configurationDeployment->toArray($noStream) : $this->configurationDeployment;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->entitlementState) {
            $res['entitlementState'] = null !== $this->entitlementState ? $this->entitlementState->toArray($noStream) : $this->entitlementState;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->modelCardIds) {
            if (\is_array($this->modelCardIds)) {
                $res['modelCardIds'] = [];
                $n1 = 0;
                foreach ($this->modelCardIds as $item1) {
                    $res['modelCardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelGroupId) {
            $res['modelGroupId'] = $this->modelGroupId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['configurationDeployment'])) {
            $model->configurationDeployment = configurationDeployment::fromMap($map['configurationDeployment']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['entitlementState'])) {
            $model->entitlementState = entitlementState::fromMap($map['entitlementState']);
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['modelCardIds'])) {
            if (!empty($map['modelCardIds'])) {
                $model->modelCardIds = [];
                $n1 = 0;
                foreach ($map['modelCardIds'] as $item1) {
                    $model->modelCardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['modelGroupId'])) {
            $model->modelGroupId = $map['modelGroupId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
