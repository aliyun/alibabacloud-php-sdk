<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListClusterCnnfStatusDetailRequest extends Model
{
    /**
     * @description An array that consists of the ID of the cluster.
     *
     * @var string[]
     */
    public $clusterIds;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterCnnfStatusDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }

        return $model;
    }
}
