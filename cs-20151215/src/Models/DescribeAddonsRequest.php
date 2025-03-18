<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddonsRequest extends Model
{
    /**
     * @description The cluster type. Valid values:
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
     * @description If you set `cluster_type` to `ManagedKubernetes` and specify `profile`, you can further specify the edition of the cluster. Valid values:
     *
     *   `ack.pro.small`: creates an ACK Pro cluster.
     *   `ack.standard`: creates an ACK Basic cluster. If you leave the parameter empty, an ACK Basic cluster is created.
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description *   `Kubernetes`: ACK dedicated cluster.
     *   `ManagedKubernetes`: ACK managed cluster. ACK managed clusters include ACK Basic clusters, ACK Pro clusters, ACK Serverless Basic clusters, ACK Serverless Pro clusters, ACK Edge Basic clusters, ACK Edge Pro clusters, and ACK Lingjun Pro clusters.
     *   `ExternalKubernetes`: registered cluster.
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
     * This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'clusterProfile' => 'cluster_profile',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'clusterVersion' => 'cluster_version',
        'region' => 'region',
    ];

    public function validate() {}

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
