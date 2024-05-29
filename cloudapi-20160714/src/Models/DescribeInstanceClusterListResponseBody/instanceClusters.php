<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListResponseBody\instanceClusters\instanceCluster;
use AlibabaCloud\Tea\Model;

class instanceClusters extends Model
{
    /**
     * @var instanceCluster[]
     */
    public $instanceCluster;
    protected $_name = [
        'instanceCluster' => 'InstanceCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCluster) {
            $res['InstanceCluster'] = [];
            if (null !== $this->instanceCluster && \is_array($this->instanceCluster)) {
                $n = 0;
                foreach ($this->instanceCluster as $item) {
                    $res['InstanceCluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCluster'])) {
            if (!empty($map['InstanceCluster'])) {
                $model->instanceCluster = [];
                $n                      = 0;
                foreach ($map['InstanceCluster'] as $item) {
                    $model->instanceCluster[$n++] = null !== $item ? instanceCluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
