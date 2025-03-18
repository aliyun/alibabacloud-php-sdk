<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersForRegionRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c8155823d057948c69a****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The specification of the clusters to query. Valid values:
     *
     *   ack.pro.small: ACK Pro clusters.
     *   ack.standard: ACK Basic clusters.
     *
     * @example ack.standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The type of the clusters to query. Valid values:
     *
     *   Kubernetes: ACK dedicated clusters.
     *   ManagedKubernetes: ACK managed clusters. ACK managed clusters include ACK Basic clusters, ACK Pro clusters, ACK Serverless Basic clusters, ACK Serverless Pro clusters, ACK Edge Basic clusters, ACK Edge Pro clusters, and ACK Lingjun Pro clusters.
     *   ExternalKubernetes: registered clusters.
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Perform a fuzzy search by using the cluster name.
     *
     * @example test-cluster
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of pages.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of records on each page.
     *
     * @example 3
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The subtype of the clusters to query. Valid values:
     *
     *   Default: ACK managed clusters. ACK managed clusters include ACK Basic clusters and ACK Pro clusters.
     *   Edge: ACK Edge clusters. ACK Edge clusters include ACK Edge Basic clusters and ACK Edge Pro clusters.
     *   Serverless: ACK Serverless clusters. ACK Serverless clusters include ACK Serverless Basic clusters and ACK Serverless Pro clusters.
     *   Lingjun: ACK Lingjun Pro clusters.
     *
     * @example Serverless
     *
     * @var string
     */
    public $profile;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'name' => 'name',
        'pageNumber' => 'page_number',
        'pageSize' => 'page_size',
        'profile' => 'profile',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersForRegionRequest
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

        return $model;
    }
}
