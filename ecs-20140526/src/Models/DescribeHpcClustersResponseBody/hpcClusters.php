<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponseBody\hpcClusters\hpcCluster;

class hpcClusters extends Model
{
    /**
     * @var hpcCluster[]
     */
    public $hpcCluster;
    protected $_name = [
        'hpcCluster' => 'HpcCluster',
    ];

    public function validate()
    {
        if (\is_array($this->hpcCluster)) {
            Model::validateArray($this->hpcCluster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hpcCluster) {
            if (\is_array($this->hpcCluster)) {
                $res['HpcCluster'] = [];
                $n1                = 0;
                foreach ($this->hpcCluster as $item1) {
                    $res['HpcCluster'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HpcCluster'])) {
            if (!empty($map['HpcCluster'])) {
                $model->hpcCluster = [];
                $n1                = 0;
                foreach ($map['HpcCluster'] as $item1) {
                    $model->hpcCluster[$n1++] = hpcCluster::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
