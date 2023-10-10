<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeKubernetesVersionMetadataRequest extends Model
{
    /**
     * @description The cluster type that you want to use. Valid values:
     *
     *   `Kubernetes`: ACK dedicated cluster
     *   `ManagedKubernetes`: ACK managed cluster
     *   `ExternalKubernetes`: registered cluster
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The Kubernetes version of the cluster. The Kubernetes versions supported by ACK are the same as the Kubernetes versions supported by open source Kubernetes. We recommend that you specify the latest Kubernetes version. If you do not set this parameter, the latest Kubernetes version is used.
     *
     * You can create ACK clusters of the latest two Kubernetes versions in the ACK console. You can call the specific ACK API operation to create clusters of other Kubernetes versions. For more information about the Kubernetes versions supported by ACK, see [Release notes for Kubernetes versions](~~185269~~).
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @description The query mode. Valid values:
     *
     *   `supported`: queries all supported versions.
     *   `creatable`: queries only versions that allow you to create clusters.
     *
     * Default value: creatable.
     * @example supported
     *
     * @var string
     */
    public $mode;

    /**
     * @description The scenario where clusters are used. Valid values:
     *
     *   `Default`: non-edge computing scenarios
     *   `Edge`: edge computing scenarios
     *   `Serverless`: serverless scenarios.
     *
     * Default value: `Default`.
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The container runtime type that you want to use. You can specify a runtime type to query only OS images that support the runtime type. Valid values:
     *
     *   `docker`: Docker
     *   `containerd`: containerd
     *   `Sandboxed-Container.runv`: Sandboxed-Container
     *
     * Otherwise, all OS images are returned.
     * @example docker
     *
     * @var string
     */
    public $runtime;
    protected $_name = [
        'clusterType'       => 'ClusterType',
        'kubernetesVersion' => 'KubernetesVersion',
        'mode'              => 'Mode',
        'profile'           => 'Profile',
        'region'            => 'Region',
        'runtime'           => 'runtime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->kubernetesVersion) {
            $res['KubernetesVersion'] = $this->kubernetesVersion;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKubernetesVersionMetadataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['KubernetesVersion'])) {
            $model->kubernetesVersion = $map['KubernetesVersion'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }

        return $model;
    }
}
