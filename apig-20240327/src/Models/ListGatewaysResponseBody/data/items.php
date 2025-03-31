<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\loadBalancers;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\securityGroup;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\tags;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\vpc;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\vSwitch;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\zones;
use AlibabaCloud\SDK\APIG\V20240327\Models\SubDomainInfo;

class items extends Model
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
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $gatewayId;

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
     * @var SubDomainInfo[]
     */
    public $subDomainInfos;

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
        'expireTimestamp' => 'expireTimestamp',
        'gatewayId' => 'gatewayId',
        'loadBalancers' => 'loadBalancers',
        'name' => 'name',
        'replicas' => 'replicas',
        'resourceGroupId' => 'resourceGroupId',
        'securityGroup' => 'securityGroup',
        'spec' => 'spec',
        'status' => 'status',
        'subDomainInfos' => 'subDomainInfos',
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
        if (\is_array($this->loadBalancers)) {
            Model::validateArray($this->loadBalancers);
        }
        if (null !== $this->securityGroup) {
            $this->securityGroup->validate();
        }
        if (\is_array($this->subDomainInfos)) {
            Model::validateArray($this->subDomainInfos);
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

        if (null !== $this->expireTimestamp) {
            $res['expireTimestamp'] = $this->expireTimestamp;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->loadBalancers) {
            if (\is_array($this->loadBalancers)) {
                $res['loadBalancers'] = [];
                $n1 = 0;
                foreach ($this->loadBalancers as $item1) {
                    $res['loadBalancers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->subDomainInfos) {
            if (\is_array($this->subDomainInfos)) {
                $res['subDomainInfos'] = [];
                $n1 = 0;
                foreach ($this->subDomainInfos as $item1) {
                    $res['subDomainInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $res['zones'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['expireTimestamp'])) {
            $model->expireTimestamp = $map['expireTimestamp'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['loadBalancers'])) {
            if (!empty($map['loadBalancers'])) {
                $model->loadBalancers = [];
                $n1 = 0;
                foreach ($map['loadBalancers'] as $item1) {
                    $model->loadBalancers[$n1++] = loadBalancers::fromMap($item1);
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

        if (isset($map['subDomainInfos'])) {
            if (!empty($map['subDomainInfos'])) {
                $model->subDomainInfos = [];
                $n1 = 0;
                foreach ($map['subDomainInfos'] as $item1) {
                    $model->subDomainInfos[$n1++] = SubDomainInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
                    $model->zones[$n1++] = zones::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
