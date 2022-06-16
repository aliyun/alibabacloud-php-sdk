<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterDetailRequest extends Model
{
    /**
     * @var string
     */
    public $clusterInstanceId;
    protected $_name = [
        'clusterInstanceId' => 'ClusterInstanceId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInstanceId'])) {
            $model->clusterInstanceId = $map['ClusterInstanceId'];
        }

        return $model;
    }
}
