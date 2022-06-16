<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class AddClusterNodeRequest extends Model
{
    /**
     * @var string
     */
    public $clusterInstanceId;

    /**
     * @var string[]
     */
    public $ecsInstanceIdList;
    protected $_name = [
        'clusterInstanceId' => 'ClusterInstanceId',
        'ecsInstanceIdList' => 'EcsInstanceIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInstanceId) {
            $res['ClusterInstanceId'] = $this->clusterInstanceId;
        }
        if (null !== $this->ecsInstanceIdList) {
            $res['EcsInstanceIdList'] = $this->ecsInstanceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddClusterNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInstanceId'])) {
            $model->clusterInstanceId = $map['ClusterInstanceId'];
        }
        if (isset($map['EcsInstanceIdList'])) {
            if (!empty($map['EcsInstanceIdList'])) {
                $model->ecsInstanceIdList = $map['EcsInstanceIdList'];
            }
        }

        return $model;
    }
}
