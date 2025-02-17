<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster;

use AlibabaCloud\Dara\Model;

class dedicatedHostIds extends Model
{
    /**
     * @var string[]
     */
    public $dedicatedHostId;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedHostId)) {
            Model::validateArray($this->dedicatedHostId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            if (\is_array($this->dedicatedHostId)) {
                $res['DedicatedHostId'] = [];
                $n1                     = 0;
                foreach ($this->dedicatedHostId as $item1) {
                    $res['DedicatedHostId'][$n1++] = $item1;
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
        if (isset($map['DedicatedHostId'])) {
            if (!empty($map['DedicatedHostId'])) {
                $model->dedicatedHostId = [];
                $n1                     = 0;
                foreach ($map['DedicatedHostId'] as $item1) {
                    $model->dedicatedHostId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
