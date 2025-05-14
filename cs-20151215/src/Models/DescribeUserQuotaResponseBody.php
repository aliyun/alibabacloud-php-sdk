<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponseBody\edgeImprovedNodepoolQuota;

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

    /**
     * @var QuotasValue[]
     */
    public $quotas;
    protected $_name = [
        'amkClusterQuota' => 'amk_cluster_quota',
        'askClusterQuota' => 'ask_cluster_quota',
        'clusterNodepoolQuota' => 'cluster_nodepool_quota',
        'clusterQuota' => 'cluster_quota',
        'edgeImprovedNodepoolQuota' => 'edge_improved_nodepool_quota',
        'nodeQuota' => 'node_quota',
        'quotas' => 'quotas',
    ];

    public function validate()
    {
        if (null !== $this->edgeImprovedNodepoolQuota) {
            $this->edgeImprovedNodepoolQuota->validate();
        }
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['edge_improved_nodepool_quota'] = null !== $this->edgeImprovedNodepoolQuota ? $this->edgeImprovedNodepoolQuota->toArray($noStream) : $this->edgeImprovedNodepoolQuota;
        }

        if (null !== $this->nodeQuota) {
            $res['node_quota'] = $this->nodeQuota;
        }

        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['quotas'] = [];
                foreach ($this->quotas as $key1 => $value1) {
                    $res['quotas'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
            if (!empty($map['quotas'])) {
                $model->quotas = [];
                foreach ($map['quotas'] as $key1 => $value1) {
                    $model->quotas[$key1] = QuotasValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
