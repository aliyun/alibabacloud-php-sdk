<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $containerCidr;

    /**
     * @var string
     */
    public $controlPlaneConfigShrink;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $podVswitchIdsShrink;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var bool
     */
    public $publicAccess;

    /**
     * @var string
     */
    public $serviceCidr;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchIdsShrink;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'containerCidr' => 'ContainerCidr',
        'controlPlaneConfigShrink' => 'ControlPlaneConfig',
        'ensRegionId' => 'EnsRegionId',
        'kubernetesVersion' => 'KubernetesVersion',
        'loadBalancerId' => 'LoadBalancerId',
        'name' => 'Name',
        'podVswitchIdsShrink' => 'PodVswitchIds',
        'profile' => 'Profile',
        'publicAccess' => 'PublicAccess',
        'serviceCidr' => 'ServiceCidr',
        'vpcId' => 'VpcId',
        'vswitchIdsShrink' => 'VswitchIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->containerCidr) {
            $res['ContainerCidr'] = $this->containerCidr;
        }

        if (null !== $this->controlPlaneConfigShrink) {
            $res['ControlPlaneConfig'] = $this->controlPlaneConfigShrink;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->kubernetesVersion) {
            $res['KubernetesVersion'] = $this->kubernetesVersion;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->podVswitchIdsShrink) {
            $res['PodVswitchIds'] = $this->podVswitchIdsShrink;
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }

        if (null !== $this->publicAccess) {
            $res['PublicAccess'] = $this->publicAccess;
        }

        if (null !== $this->serviceCidr) {
            $res['ServiceCidr'] = $this->serviceCidr;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchIdsShrink) {
            $res['VswitchIds'] = $this->vswitchIdsShrink;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['ContainerCidr'])) {
            $model->containerCidr = $map['ContainerCidr'];
        }

        if (isset($map['ControlPlaneConfig'])) {
            $model->controlPlaneConfigShrink = $map['ControlPlaneConfig'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['KubernetesVersion'])) {
            $model->kubernetesVersion = $map['KubernetesVersion'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PodVswitchIds'])) {
            $model->podVswitchIdsShrink = $map['PodVswitchIds'];
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        if (isset($map['PublicAccess'])) {
            $model->publicAccess = $map['PublicAccess'];
        }

        if (isset($map['ServiceCidr'])) {
            $model->serviceCidr = $map['ServiceCidr'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchIds'])) {
            $model->vswitchIdsShrink = $map['VswitchIds'];
        }

        return $model;
    }
}
