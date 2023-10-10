<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Kubernetes cluster.
     *
     * @example 5b2b4ab4-efbc-4a81-9c45-a5942881****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the Kubernetes cluster.
     *
     * @example my-dev-cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The Ingresses.
     *
     * @var ingressConfs[]
     */
    public $ingressConfs;

    /**
     * @description The ID of the region where the cluster resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'clusterName'  => 'ClusterName',
        'ingressConfs' => 'IngressConfs',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->ingressConfs) {
            $res['IngressConfs'] = [];
            if (null !== $this->ingressConfs && \is_array($this->ingressConfs)) {
                $n = 0;
                foreach ($this->ingressConfs as $item) {
                    $res['IngressConfs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['IngressConfs'])) {
            if (!empty($map['IngressConfs'])) {
                $model->ingressConfs = [];
                $n                   = 0;
                foreach ($map['IngressConfs'] as $item) {
                    $model->ingressConfs[$n++] = null !== $item ? ingressConfs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
