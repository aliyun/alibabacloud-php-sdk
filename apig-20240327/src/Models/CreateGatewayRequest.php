<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\logConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\networkAccessConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\tag;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\zoneConfig;

class CreateGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var logConfig
     */
    public $logConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var networkAccessConfig
     */
    public $networkAccessConfig;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var zoneConfig
     */
    public $zoneConfig;
    protected $_name = [
        'chargeType' => 'chargeType',
        'gatewayType' => 'gatewayType',
        'logConfig' => 'logConfig',
        'name' => 'name',
        'networkAccessConfig' => 'networkAccessConfig',
        'resourceGroupId' => 'resourceGroupId',
        'spec' => 'spec',
        'tag' => 'tag',
        'vpcId' => 'vpcId',
        'zoneConfig' => 'zoneConfig',
    ];

    public function validate()
    {
        if (null !== $this->logConfig) {
            $this->logConfig->validate();
        }
        if (null !== $this->networkAccessConfig) {
            $this->networkAccessConfig->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (null !== $this->zoneConfig) {
            $this->zoneConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }

        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toArray($noStream) : $this->logConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkAccessConfig) {
            $res['networkAccessConfig'] = null !== $this->networkAccessConfig ? $this->networkAccessConfig->toArray($noStream) : $this->networkAccessConfig;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneConfig) {
            $res['zoneConfig'] = null !== $this->zoneConfig ? $this->zoneConfig->toArray($noStream) : $this->zoneConfig;
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

        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }

        if (isset($map['logConfig'])) {
            $model->logConfig = logConfig::fromMap($map['logConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkAccessConfig'])) {
            $model->networkAccessConfig = networkAccessConfig::fromMap($map['networkAccessConfig']);
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['zoneConfig'])) {
            $model->zoneConfig = zoneConfig::fromMap($map['zoneConfig']);
        }

        return $model;
    }
}
