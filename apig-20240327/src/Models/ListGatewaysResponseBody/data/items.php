<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data;

use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\loadBalancers;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example Console
     *
     * @var string
     */
    public $createFrom;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example 172086834548
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @example gw-cpv54p5***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var loadBalancers[]
     */
    public $loadBalancers;

    /**
     * @example itemcenter-gateway
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var string
     */
    public $replicas;

    /**
     * @example apigw.small.x1
     *
     * @var string
     */
    public $spec;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 2.0.2
     *
     * @var string
     */
    public $targetVersion;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @example 2.0.2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'chargeType'      => 'chargeType',
        'createFrom'      => 'createFrom',
        'createTimestamp' => 'createTimestamp',
        'expireTimestamp' => 'expireTimestamp',
        'gatewayId'       => 'gatewayId',
        'loadBalancers'   => 'loadBalancers',
        'name'            => 'name',
        'replicas'        => 'replicas',
        'spec'            => 'spec',
        'status'          => 'status',
        'targetVersion'   => 'targetVersion',
        'updateTimestamp' => 'updateTimestamp',
        'version'         => 'version',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->expireTimestamp) {
            $res['expireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
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
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->targetVersion) {
            $res['targetVersion'] = $this->targetVersion;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
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
        if (isset($map['expireTimestamp'])) {
            $model->expireTimestamp = $map['expireTimestamp'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['loadBalancers'])) {
            if (!empty($map['loadBalancers'])) {
                $model->loadBalancers = [];
                $n                    = 0;
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
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
