<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddonsRequest extends Model
{
    /**
     * @description The type of cluster. Valid values:
     *
     *   `Default`: ACK managed cluster
     *   `Serverless`: ACK Serverless cluster
     *   `Edge`: ACK Edge cluster
     *
     * @example Default
     *
     * @var string
     */
    public $clusterProfile;

    /**
     * @description The edition of the cluster. If you set the cluster type to `ManagedKubernetes`, the following editions are supported:
     *
     *   `ack.pro.small`: ACK Pro cluster
     *   `ack.standard`: ACK Basic cluster
     *
     * By default, this parameter is left empty. If you leave this parameter empty, clusters are not filtered by edition.
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The type of cluster. Valid values:
     *
     *   `Kubernetes`: ACK dedicated cluster
     *   `ManagedKubernetes`: ACK managed cluster
     *   `Ask`: ACK Serverless cluster
     *   `ExternalKubernetes`: registered cluster
     *
     * @example kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The cluster version.
     *
     * @example 1.24.6-aliyun.1
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'clusterProfile' => 'cluster_profile',
        'clusterSpec'    => 'cluster_spec',
        'clusterType'    => 'cluster_type',
        'clusterVersion' => 'cluster_version',
        'region'         => 'region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterProfile) {
            $res['cluster_profile'] = $this->clusterProfile;
        }
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->clusterVersion) {
            $res['cluster_version'] = $this->clusterVersion;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_profile'])) {
            $model->clusterProfile = $map['cluster_profile'];
        }
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['cluster_version'])) {
            $model->clusterVersion = $map['cluster_version'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
