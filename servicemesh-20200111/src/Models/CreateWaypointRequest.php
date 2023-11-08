<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateWaypointRequest extends Model
{
    /**
     * @description The ID of the cluster on the data plane.
     *
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to enable Horizontal Pod Autoscaling (HPA).
     *
     * @example false
     *
     * @var bool
     */
    public $HPAEnabled;

    /**
     * @description The maximum number of waypoint proxy pods when HPA is enabled.
     *
     * @example 4
     *
     * @var int
     */
    public $HPAMaxReplicas;

    /**
     * @description The minimum number of waypoint proxy pods when HPA is enabled.
     *
     * @example 2
     *
     * @var int
     */
    public $HPAMinReplicas;

    /**
     * @description The expected CPU utilization when HPA is enabled.
     *
     * @example 93
     *
     * @var int
     */
    public $HPATargetCPU;

    /**
     * @description The expected memory usage when HPA is enabled.
     *
     * @example 91
     *
     * @var int
     */
    public $HPATargetMemory;

    /**
     * @description The maximum number of CPU cores that are available to the waypoint proxy pods.
     *
     * @example 2000m
     *
     * @var string
     */
    public $limitCPU;

    /**
     * @description The maximum size of the memory that is available to the waypoint proxy pods.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $limitMemory;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Specifies whether to deploy waypoint proxy pods based on Elastic Container Instance (ECI).
     *
     * @example false
     *
     * @var bool
     */
    public $preferECI;

    /**
     * @description The number of waypoint proxy pods.
     *
     * @example 1
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The number of CPU cores requested by the waypoint proxy pods.
     *
     * @example 100m
     *
     * @var string
     */
    public $requestCPU;

    /**
     * @description The size of the memory requested by the waypoint proxy pods.
     *
     * @example 128Mi
     *
     * @var string
     */
    public $requestMemory;

    /**
     * @description The service account on which the waypoint proxy takes effect. If you do not specify this parameter, the waypoint proxy takes effect for the entire namespace.
     *
     * @example bookinfo-productpage
     *
     * @var string
     */
    public $serviceAccount;

    /**
     * @description The Service Mesh (ASM) instance ID.
     *
     * @example ce134b0727aa2492db69f6c3880e****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'HPAEnabled'      => 'HPAEnabled',
        'HPAMaxReplicas'  => 'HPAMaxReplicas',
        'HPAMinReplicas'  => 'HPAMinReplicas',
        'HPATargetCPU'    => 'HPATargetCPU',
        'HPATargetMemory' => 'HPATargetMemory',
        'limitCPU'        => 'LimitCPU',
        'limitMemory'     => 'LimitMemory',
        'namespace'       => 'Namespace',
        'preferECI'       => 'PreferECI',
        'replicas'        => 'Replicas',
        'requestCPU'      => 'RequestCPU',
        'requestMemory'   => 'RequestMemory',
        'serviceAccount'  => 'ServiceAccount',
        'serviceMeshId'   => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateWaypointRequest
     */
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
