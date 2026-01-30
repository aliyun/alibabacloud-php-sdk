<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateClusterRequest\controlPlaneConfig;

class CreateClusterRequest extends Model
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
     * @var controlPlaneConfig
     */
    public $controlPlaneConfig;

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
     * @var string[]
     */
    public $podVswitchIds;

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
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'containerCidr' => 'ContainerCidr',
        'controlPlaneConfig' => 'ControlPlaneConfig',
        'ensRegionId' => 'EnsRegionId',
        'kubernetesVersion' => 'KubernetesVersion',
        'loadBalancerId' => 'LoadBalancerId',
        'name' => 'Name',
        'podVswitchIds' => 'PodVswitchIds',
        'profile' => 'Profile',
        'publicAccess' => 'PublicAccess',
        'serviceCidr' => 'ServiceCidr',
        'vpcId' => 'VpcId',
        'vswitchIds' => 'VswitchIds',
    ];

    public function validate()
    {
        if (null !== $this->controlPlaneConfig) {
            $this->controlPlaneConfig->validate();
        }
        if (\is_array($this->podVswitchIds)) {
            Model::validateArray($this->podVswitchIds);
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
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

        if (null !== $this->controlPlaneConfig) {
            $res['ControlPlaneConfig'] = null !== $this->controlPlaneConfig ? $this->controlPlaneConfig->toArray($noStream) : $this->controlPlaneConfig;
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

        if (null !== $this->podVswitchIds) {
            if (\is_array($this->podVswitchIds)) {
                $res['PodVswitchIds'] = [];
                $n1 = 0;
                foreach ($this->podVswitchIds as $item1) {
                    $res['PodVswitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['VswitchIds'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['VswitchIds'][$n1] = $item1;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['ContainerCidr'])) {
            $model->containerCidr = $map['ContainerCidr'];
        }

        if (isset($map['ControlPlaneConfig'])) {
            $model->controlPlaneConfig = controlPlaneConfig::fromMap($map['ControlPlaneConfig']);
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
            if (!empty($map['PodVswitchIds'])) {
                $model->podVswitchIds = [];
                $n1 = 0;
                foreach ($map['PodVswitchIds'] as $item1) {
                    $model->podVswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['VswitchIds'])) {
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['VswitchIds'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
