<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckClustersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of cluster.
     *
     * @example c5ea2c2d9a3cf499481292f60425d****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the cluster. The value is fixed as ManagedKubernetes.
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The name of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the VPC to which the cluster belongs.
     *
     * @example vpc-bp12nu14urf0upaf4****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId'   => 'clusterId',
        'clusterType' => 'clusterType',
        'name'        => 'name',
        'vpcId'       => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
