<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckClustersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'clusterType' => 'clusterType',
        'vpcId'       => 'vpcId',
        'name'        => 'name',
        'clusterId'   => 'clusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
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
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        return $model;
    }
}
