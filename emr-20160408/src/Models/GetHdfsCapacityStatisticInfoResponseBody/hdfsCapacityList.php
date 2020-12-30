<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetHdfsCapacityStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetHdfsCapacityStatisticInfoResponseBody\hdfsCapacityList\clusterStatHdfsCapacity;
use AlibabaCloud\Tea\Model;

class hdfsCapacityList extends Model
{
    /**
     * @var clusterStatHdfsCapacity[]
     */
    public $clusterStatHdfsCapacity;
    protected $_name = [
        'clusterStatHdfsCapacity' => 'ClusterStatHdfsCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatHdfsCapacity) {
            $res['ClusterStatHdfsCapacity'] = [];
            if (null !== $this->clusterStatHdfsCapacity && \is_array($this->clusterStatHdfsCapacity)) {
                $n = 0;
                foreach ($this->clusterStatHdfsCapacity as $item) {
                    $res['ClusterStatHdfsCapacity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hdfsCapacityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatHdfsCapacity'])) {
            if (!empty($map['ClusterStatHdfsCapacity'])) {
                $model->clusterStatHdfsCapacity = [];
                $n                              = 0;
                foreach ($map['ClusterStatHdfsCapacity'] as $item) {
                    $model->clusterStatHdfsCapacity[$n++] = null !== $item ? clusterStatHdfsCapacity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
