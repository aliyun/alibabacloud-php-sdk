<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClustersV1ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClustersV1ResponseBody\clusters\controlPlaneConfig;

class clusters extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var mixed
     */
    public $config;

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
    public $joinToken;

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
        'aliUid' => 'AliUid',
        'clusterId' => 'ClusterId',
        'config' => 'Config',
        'containerCidr' => 'ContainerCidr',
        'controlPlaneConfig' => 'ControlPlaneConfig',
        'ensRegionId' => 'EnsRegionId',
        'joinToken' => 'JoinToken',
        'kubernetesVersion' => 'KubernetesVersion',
        'loadBalancerId' => 'LoadBalancerId',
        'name' => 'Name',
        'podVswitchIds' => 'PodVswitchIds',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
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

        if (null !== $this->joinToken) {
            $res['JoinToken'] = $this->joinToken;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
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

        if (isset($map['JoinToken'])) {
            $model->joinToken = $map['JoinToken'];
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
