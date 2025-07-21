<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\logConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\networkAccessConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\tag;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\zoneConfig;
use AlibabaCloud\Tea\Model;

class CreateGatewayRequest extends Model
{
    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example API
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @var logConfig
     */
    public $logConfig;

    /**
     * @example test-ceshi
     *
     * @var string
     */
    public $name;

    /**
     * @var networkAccessConfig
     */
    public $networkAccessConfig;

    /**
     * @example rg-ahr5uil8raz0rq3b
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example apigw.dev.x2
     *
     * @var string
     */
    public $spec;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example vpc-zm0x16tomfiat1mk9f6rs
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->networkAccessConfig) {
            $res['networkAccessConfig'] = null !== $this->networkAccessConfig ? $this->networkAccessConfig->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->tag) {
            $res['tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneConfig) {
            $res['zoneConfig'] = null !== $this->zoneConfig ? $this->zoneConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayRequest
     */
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
                $n = 0;
                foreach ($map['tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
