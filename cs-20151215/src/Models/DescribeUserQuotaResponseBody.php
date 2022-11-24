<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponseBody\edgeImprovedNodepoolQuota;
use AlibabaCloud\Tea\Model;

class DescribeUserQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $amkClusterQuota;

    /**
     * @var int
     */
    public $askClusterQuota;

    /**
     * @var int
     */
    public $clusterNodepoolQuota;

    /**
     * @var int
     */
    public $clusterQuota;

    /**
     * @var edgeImprovedNodepoolQuota
     */
    public $edgeImprovedNodepoolQuota;

    /**
     * @var int
     */
    public $nodeQuota;
    protected $_name = [
        'amkClusterQuota'           => 'amk_cluster_quota',
        'askClusterQuota'           => 'ask_cluster_quota',
        'clusterNodepoolQuota'      => 'cluster_nodepool_quota',
        'clusterQuota'              => 'cluster_quota',
        'edgeImprovedNodepoolQuota' => 'edge_improved_nodepool_quota',
        'nodeQuota'                 => 'node_quota',
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

        return $model;
    }
}
