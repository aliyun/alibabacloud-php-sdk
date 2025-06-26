<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\environments;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\loadBalancers;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\securityGroup;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\tags;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\vpc;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\vSwitch;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\zones;

class data extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createFrom;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var environments[]
     */
    public $environments;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var loadBalancers[]
     */
    public $loadBalancers;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $replicas;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var securityGroup
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetVersion;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var vSwitch
     */
    public $vSwitch;

    /**
     * @var string
     */
    public $version;

    /**
     * @var vpc
     */
    public $vpc;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'chargeType' => 'chargeType',
        'createFrom' => 'createFrom',
        'createTimestamp' => 'createTimestamp',
        'environments' => 'environments',
        'expireTimestamp' => 'expireTimestamp',
        'gatewayId' => 'gatewayId',
        'gatewayType' => 'gatewayType',
        'loadBalancers' => 'loadBalancers',
        'name' => 'name',
        'replicas' => 'replicas',
        'resourceGroupId' => 'resourceGroupId',
        'securityGroup' => 'securityGroup',
        'spec' => 'spec',
        'status' => 'status',
        'tags' => 'tags',
        'targetVersion' => 'targetVersion',
        'updateTimestamp' => 'updateTimestamp',
        'vSwitch' => 'vSwitch',
        'version' => 'version',
        'vpc' => 'vpc',
        'zones' => 'zones',
    ];

    public function validate()
    {
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        if (\is_array($this->loadBalancers)) {
            Model::validateArray($this->loadBalancers);
        }
        if (null !== $this->securityGroup) {
            $this->securityGroup->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->vSwitch) {
            $this->vSwitch->validate();
        }
        if (null !== $this->vpc) {
            $this->vpc->validate();
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->createFrom) {
            $res['createFrom'] = $this->createFrom;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['environments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expireTimestamp) {
            $res['expireTimestamp'] = $this->expireTimestamp;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }

        if (null !== $this->loadBalancers) {
            if (\is_array($this->loadBalancers)) {
                $res['loadBalancers'] = [];
                $n1 = 0;
                foreach ($this->loadBalancers as $item1) {
                    $res['loadBalancers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->replicas) {
            $res['replicas'] = $this->replicas;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityGroup) {
            $res['securityGroup'] = null !== $this->securityGroup ? $this->securityGroup->toArray($noStream) : $this->securityGroup;
        }

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetVersion) {
            $res['targetVersion'] = $this->targetVersion;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        if (null !== $this->vSwitch) {
            $res['vSwitch'] = null !== $this->vSwitch ? $this->vSwitch->toArray($noStream) : $this->vSwitch;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->vpc) {
            $res['vpc'] = null !== $this->vpc ? $this->vpc->toArray($noStream) : $this->vpc;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['createFrom'])) {
            $model->createFrom = $map['createFrom'];
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['environments'] as $item1) {
                    $model->environments[$n1] = environments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['expireTimestamp'])) {
            $model->expireTimestamp = $map['expireTimestamp'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }

        if (isset($map['loadBalancers'])) {
            if (!empty($map['loadBalancers'])) {
                $model->loadBalancers = [];
                $n1 = 0;
                foreach ($map['loadBalancers'] as $item1) {
                    $model->loadBalancers[$n1] = loadBalancers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['replicas'])) {
            $model->replicas = $map['replicas'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['securityGroup'])) {
            $model->securityGroup = securityGroup::fromMap($map['securityGroup']);
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        if (isset($map['vSwitch'])) {
            $model->vSwitch = vSwitch::fromMap($map['vSwitch']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['vpc'])) {
            $model->vpc = vpc::fromMap($map['vpc']);
        }

        if (isset($map['zones'])) {
            if (!empty($map['zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
