<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersV1Request extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster type, which is available only when the cluster type is set to `ManagedKubernetes`. Valid values:
     *
     *   `ack.pro.small`: ACK Pro cluster
     *   `ack.standard`: ACK Basic cluster
     *
     * By default, this parameter is left empty, which means that ACK clusters are not filtered by this parameter.
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The type of cluster. Valid values:
     *
     *   `Kubernetes`: ACK dedicated cluster
     *   `ManagedKubernetes`: ACK managed cluster, ACK Serverless cluster, or ACK Edge cluster
     *   `Ask`: ACK Serverless cluster
     *   `ExternalKubernetes`: registered cluster
     *
     * If you want to query ACK Serverless clusters, specify ManagedKubernetes or Ask based on the value that you specified when you created the ACK Serverless clusters.
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The cluster name.
     *
     * The name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (-). The name cannot start with a hyphen (-).
     * @example cluster-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description The page number.
     *
     * @example 3
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The cluster identifier, which is available only when the cluster type is set to `ManagedKubernetes`. Valid values:
     *
     *   `Default`: ACK managed cluster
     *   `Serverless`: ACK Serverless cluster
     *   `Edge`: ACK Edge cluster
     *
     * By default, this parameter is left empty, which means that ACK clusters are not filtered by this parameter.
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The region ID of the clusters. You can use this parameter to query all clusters in the specified region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'   => 'cluster_id',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'name'        => 'name',
        'pageNumber'  => 'page_number',
        'pageSize'    => 'page_size',
        'profile'     => 'profile',
        'regionId'    => 'region_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersV1Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        return $model;
    }
}
