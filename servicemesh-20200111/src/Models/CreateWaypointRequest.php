<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class CreateWaypointRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $HPAEnabled;

    /**
     * @var int
     */
    public $HPAMaxReplicas;

    /**
     * @var int
     */
    public $HPAMinReplicas;

    /**
     * @var int
     */
    public $HPATargetCPU;

    /**
     * @var int
     */
    public $HPATargetMemory;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var bool
     */
    public $preferECI;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $serviceAccount;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'HPAEnabled' => 'HPAEnabled',
        'HPAMaxReplicas' => 'HPAMaxReplicas',
        'HPAMinReplicas' => 'HPAMinReplicas',
        'HPATargetCPU' => 'HPATargetCPU',
        'HPATargetMemory' => 'HPATargetMemory',
        'limitCPU' => 'LimitCPU',
        'limitMemory' => 'LimitMemory',
        'namespace' => 'Namespace',
        'preferECI' => 'PreferECI',
        'replicas' => 'Replicas',
        'requestCPU' => 'RequestCPU',
        'requestMemory' => 'RequestMemory',
        'serviceAccount' => 'ServiceAccount',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->HPAEnabled) {
            $res['HPAEnabled'] = $this->HPAEnabled;
        }

        if (null !== $this->HPAMaxReplicas) {
            $res['HPAMaxReplicas'] = $this->HPAMaxReplicas;
        }

        if (null !== $this->HPAMinReplicas) {
            $res['HPAMinReplicas'] = $this->HPAMinReplicas;
        }

        if (null !== $this->HPATargetCPU) {
            $res['HPATargetCPU'] = $this->HPATargetCPU;
        }

        if (null !== $this->HPATargetMemory) {
            $res['HPATargetMemory'] = $this->HPATargetMemory;
        }

        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }

        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->preferECI) {
            $res['PreferECI'] = $this->preferECI;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }

        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }

        if (null !== $this->serviceAccount) {
            $res['ServiceAccount'] = $this->serviceAccount;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['HPAEnabled'])) {
            $model->HPAEnabled = $map['HPAEnabled'];
        }

        if (isset($map['HPAMaxReplicas'])) {
            $model->HPAMaxReplicas = $map['HPAMaxReplicas'];
        }

        if (isset($map['HPAMinReplicas'])) {
            $model->HPAMinReplicas = $map['HPAMinReplicas'];
        }

        if (isset($map['HPATargetCPU'])) {
            $model->HPATargetCPU = $map['HPATargetCPU'];
        }

        if (isset($map['HPATargetMemory'])) {
            $model->HPATargetMemory = $map['HPATargetMemory'];
        }

        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }

        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PreferECI'])) {
            $model->preferECI = $map['PreferECI'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }

        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }

        if (isset($map['ServiceAccount'])) {
            $model->serviceAccount = $map['ServiceAccount'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
