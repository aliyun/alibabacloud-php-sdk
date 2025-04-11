<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListResponseBody\instanceClusters\instanceCluster;

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
        if (\is_array($this->instanceCluster)) {
            Model::validateArray($this->instanceCluster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCluster) {
            if (\is_array($this->instanceCluster)) {
                $res['InstanceCluster'] = [];
                $n1 = 0;
                foreach ($this->instanceCluster as $item1) {
                    $res['InstanceCluster'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceCluster'])) {
            if (!empty($map['InstanceCluster'])) {
                $model->instanceCluster = [];
                $n1 = 0;
                foreach ($map['InstanceCluster'] as $item1) {
                    $model->instanceCluster[$n1++] = instanceCluster::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
