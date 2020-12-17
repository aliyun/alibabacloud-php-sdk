<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeKubernetesVersionMetadataRequest extends Model
{
    /**
     * @description 地域ID。
     *
     * @var string
     */
    public $region;

    /**
     * @description 集群类型。
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 是否查询多可用区。
     *
     * @var bool
     */
    public $multiAZ;

    /**
     * @description 要查询的版本，如果为空则查所有版本。
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @description 边缘集群标识，用于区分边缘集群，取值：Default或Edge。
     *
     * @var string
     */
    public $profile;
    protected $_name = [
        'region'            => 'Region',
        'clusterType'       => 'ClusterType',
        'multiAZ'           => 'MultiAZ',
        'kubernetesVersion' => 'KubernetesVersion',
        'profile'           => 'Profile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->multiAZ) {
            $res['MultiAZ'] = $this->multiAZ;
        }
        if (null !== $this->kubernetesVersion) {
            $res['KubernetesVersion'] = $this->kubernetesVersion;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['MultiAZ'])) {
            $model->multiAZ = $map['MultiAZ'];
        }
        if (isset($map['KubernetesVersion'])) {
            $model->kubernetesVersion = $map['KubernetesVersion'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        return $model;
    }
}
