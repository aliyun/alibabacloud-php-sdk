<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeKubernetesVersionMetadataRequest extends Model
{
    /**
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @example supported
     *
     * @var string
     */
    public $mode;

    /**
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
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
