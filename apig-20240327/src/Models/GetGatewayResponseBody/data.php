<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\environments;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\loadBalancers;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\securityGroup;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\tags;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\vpc;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\vSwitch;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\zones;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The billing method. Valid values:
     *
     *   POSTPAY: pay-as-you-go
     *   PREPAY: subscription
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The creation source of the instance. Valid values:
     *
     *   Console
     *
     * @example Console
     *
     * @var string
     */
    public $createFrom;

    /**
     * @description The creation timestamp. Unit: milliseconds.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The list of environments associated with the instance.
     *
     * @var environments[]
     */
    public $environments;

    /**
     * @description The time when the instance expires. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The instance ID.
     *
     * @example gw-cq2vundlhtg***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description the gateway type, which is categorized into the following two types:
     * - API: indicates an API gateway
     * - AI: Indicates an AI gateway
     *
     * @example API
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $isp;

    /**
     * @description The ingress addresses of the instance.
     *
     * @var loadBalancers[]
     */
    public $loadBalancers;

    /**
     * @description The instance name.
     *
     * @example itemcenter-gateway
     *
     * @var string
     */
    public $name;

    /**
     * @description The node quantity of the instance.
     *
     * @example 2
     *
     * @var string
     */
    public $replicas;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2s3cvc4jzfxi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security group of the instance.
     *
     * @var securityGroup
     */
    public $securityGroup;

    /**
     * @description The instance specification. Valid values:
     *
     *   apigw.small.x1
     *
     * @example apigw.small.x1
     *
     * @var string
     */
    public $spec;

    /**
     * @description The instance state. Valid values:
     *
     *   Running: The instance is running.
     *   Creating: The instance is being created.
     *   CreateFailed: The instance failed to be created.
     *   Upgrading: The instance is being upgraded.
     *   UpgradeFailed: The instance failed to be upgraded.
     *   Restarting: The instance is being restarted.
     *   RestartFailed: The instance failed to be restarted.
     *   Deleting: The instance is being released.
     *   DeleteFailed: The instance failed to be released.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The resource tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The destination version of the instance. If the value is inconsistent with the version value, you can upgrade the instance.
     *
     * @example 2.0.2
     *
     * @var string
     */
    public $targetVersion;

    /**
     * @description The last update timestamp. Unit: milliseconds.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The vSwitch associated with the instance.
     *
     * @var vSwitch
     */
    public $vSwitch;

    /**
     * @description The instance version.
     *
     * @example 2.0.2
     *
     * @var string
     */
    public $version;

    /**
     * @description The VPC associated with the instance.
     *
     * @var vpc
     */
    public $vpc;

    /**
     * @description The list of zones associated with the instance.
     *
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
        'isp' => 'isp',
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

    public function validate() {}

    public function toMap()
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
            $res['environments'] = [];
            if (null !== $this->environments && \is_array($this->environments)) {
                $n = 0;
                foreach ($this->environments as $item) {
                    $res['environments'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->isp) {
            $res['isp'] = $this->isp;
        }
        if (null !== $this->loadBalancers) {
            $res['loadBalancers'] = [];
            if (null !== $this->loadBalancers && \is_array($this->loadBalancers)) {
                $n = 0;
                foreach ($this->loadBalancers as $item) {
                    $res['loadBalancers'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['securityGroup'] = null !== $this->securityGroup ? $this->securityGroup->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['vSwitch'] = null !== $this->vSwitch ? $this->vSwitch->toMap() : null;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->vpc) {
            $res['vpc'] = null !== $this->vpc ? $this->vpc->toMap() : null;
        }
        if (null !== $this->zones) {
            $res['zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['zones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['environments'] as $item) {
                    $model->environments[$n++] = null !== $item ? environments::fromMap($item) : $item;
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
        if (isset($map['isp'])) {
            $model->isp = $map['isp'];
        }
        if (isset($map['loadBalancers'])) {
            if (!empty($map['loadBalancers'])) {
                $model->loadBalancers = [];
                $n = 0;
                foreach ($map['loadBalancers'] as $item) {
                    $model->loadBalancers[$n++] = null !== $item ? loadBalancers::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
