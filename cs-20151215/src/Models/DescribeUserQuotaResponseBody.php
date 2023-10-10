<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponseBody\edgeImprovedNodepoolQuota;
use AlibabaCloud\Tea\Model;

class DescribeUserQuotaResponseBody extends Model
{
    /**
     * @description The quota of Container Service for Kubernetes (ACK) managed clusters. Default value: 20. If the default quota limit is reached, submit an application in the [Quota Center console](https://quotas.console.aliyun.com/products/csk/quotas) to increase the quota.
     *
     * @example 20
     *
     * @var int
     */
    public $amkClusterQuota;

    /**
     * @description The quota of ACK Serverless clusters. Default value: 20. If the default quota limit is reached, submit an application in the [Quota Center console](https://quotas.console.aliyun.com/products/csk/quotas) to increase the quota.
     *
     * @example 3
     *
     * @var int
     */
    public $askClusterQuota;

    /**
     * @description The quota of node pools in an ACK cluster. Default value: 20. If the default quota limit is reached, submit an application in the [Quota Center console](https://quotas.console.aliyun.com/products/csk/quotas) to increase the quota.
     *
     * @example 10
     *
     * @var int
     */
    public $clusterNodepoolQuota;

    /**
     * @description The quota of clusters that belong to an Alibaba Cloud account. Default value: 50. If the default quota limit is reached, submit an application in the [Quota Center console](https://quotas.console.aliyun.com/products/csk/quotas) to increase the quota.
     *
     * @example 50
     *
     * @var int
     */
    public $clusterQuota;

    /**
     * @description The quota of enhanced edge node pools.
     *
     * @var edgeImprovedNodepoolQuota
     */
    public $edgeImprovedNodepoolQuota;

    /**
     * @description The quota of nodes in an ACK cluster. Default value: 100. If the default quota limit is reached, submit an application in the [Quota Center console](https://quotas.console.aliyun.com/products/csk/quotas) to increase the quota.
     *
     * @example 100
     *
     * @var int
     */
    public $nodeQuota;

    /**
     * @description Information about the new quota.
     *
     * @var QuotasValue[]
     */
    public $quotas;
    protected $_name = [
        'amkClusterQuota'           => 'amk_cluster_quota',
        'askClusterQuota'           => 'ask_cluster_quota',
        'clusterNodepoolQuota'      => 'cluster_nodepool_quota',
        'clusterQuota'              => 'cluster_quota',
        'edgeImprovedNodepoolQuota' => 'edge_improved_nodepool_quota',
        'nodeQuota'                 => 'node_quota',
        'quotas'                    => 'quotas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amkClusterQuota) {
            $res['amk_cluster_quota'] = $this->amkClusterQuota;
        }
        if (null !== $this->askClusterQuota) {
            $res['ask_cluster_quota'] = $this->askClusterQuota;
        }
        if (null !== $this->clusterNodepoolQuota) {
            $res['cluster_nodepool_quota'] = $this->clusterNodepoolQuota;
        }
        if (null !== $this->clusterQuota) {
            $res['cluster_quota'] = $this->clusterQuota;
        }
        if (null !== $this->edgeImprovedNodepoolQuota) {
            $res['edge_improved_nodepool_quota'] = null !== $this->edgeImprovedNodepoolQuota ? $this->edgeImprovedNodepoolQuota->toMap() : null;
        }
        if (null !== $this->nodeQuota) {
            $res['node_quota'] = $this->nodeQuota;
        }
        if (null !== $this->quotas) {
            $res['quotas'] = [];
            if (null !== $this->quotas && \is_array($this->quotas)) {
                foreach ($this->quotas as $key => $val) {
                    $res['quotas'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amk_cluster_quota'])) {
            $model->amkClusterQuota = $map['amk_cluster_quota'];
        }
        if (isset($map['ask_cluster_quota'])) {
            $model->askClusterQuota = $map['ask_cluster_quota'];
        }
        if (isset($map['cluster_nodepool_quota'])) {
            $model->clusterNodepoolQuota = $map['cluster_nodepool_quota'];
        }
        if (isset($map['cluster_quota'])) {
            $model->clusterQuota = $map['cluster_quota'];
        }
        if (isset($map['edge_improved_nodepool_quota'])) {
            $model->edgeImprovedNodepoolQuota = edgeImprovedNodepoolQuota::fromMap($map['edge_improved_nodepool_quota']);
        }
        if (isset($map['node_quota'])) {
            $model->nodeQuota = $map['node_quota'];
        }
        if (isset($map['quotas'])) {
            $model->quotas = $map['quotas'];
        }

        return $model;
    }
}
