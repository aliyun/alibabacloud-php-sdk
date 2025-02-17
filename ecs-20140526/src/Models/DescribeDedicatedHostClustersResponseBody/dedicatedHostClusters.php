<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster;

class dedicatedHostClusters extends Model
{
    /**
     * @var dedicatedHostCluster[]
     */
    public $dedicatedHostCluster;
    protected $_name = [
        'dedicatedHostCluster' => 'DedicatedHostCluster',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedHostCluster)) {
            Model::validateArray($this->dedicatedHostCluster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostCluster) {
            if (\is_array($this->dedicatedHostCluster)) {
                $res['DedicatedHostCluster'] = [];
                $n1                          = 0;
                foreach ($this->dedicatedHostCluster as $item1) {
                    $res['DedicatedHostCluster'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicatedHostCluster'])) {
            if (!empty($map['DedicatedHostCluster'])) {
                $model->dedicatedHostCluster = [];
                $n1                          = 0;
                foreach ($map['DedicatedHostCluster'] as $item1) {
                    $model->dedicatedHostCluster[$n1++] = dedicatedHostCluster::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
