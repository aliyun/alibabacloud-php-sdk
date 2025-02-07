<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeKubernetesVersionMetadataRequest extends Model
{
    /**
     * @var string
     */
    public $clusterType;
    /**
     * @var string
     */
    public $kubernetesVersion;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string
     */
    public $profile;
    /**
     * @var bool
     */
    public $queryUpgradableVersion;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $runtime;
    protected $_name = [
        'clusterType'            => 'ClusterType',
        'kubernetesVersion'      => 'KubernetesVersion',
        'mode'                   => 'Mode',
        'profile'                => 'Profile',
        'queryUpgradableVersion' => 'QueryUpgradableVersion',
        'region'                 => 'Region',
        'runtime'                => 'runtime',
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

        if (null !== $this->kubernetesVersion) {
            $res['KubernetesVersion'] = $this->kubernetesVersion;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }

        if (null !== $this->queryUpgradableVersion) {
            $res['QueryUpgradableVersion'] = $this->queryUpgradableVersion;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
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

        if (isset($map['KubernetesVersion'])) {
            $model->kubernetesVersion = $map['KubernetesVersion'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        if (isset($map['QueryUpgradableVersion'])) {
            $model->queryUpgradableVersion = $map['QueryUpgradableVersion'];
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
