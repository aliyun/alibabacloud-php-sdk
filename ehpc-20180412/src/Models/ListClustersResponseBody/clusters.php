<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var clusterInfoSimple[]
     */
    public $clusterInfoSimple;
    protected $_name = [
        'clusterInfoSimple' => 'ClusterInfoSimple',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInfoSimple) {
            $res['ClusterInfoSimple'] = [];
            if (null !== $this->clusterInfoSimple && \is_array($this->clusterInfoSimple)) {
                $n = 0;
                foreach ($this->clusterInfoSimple as $item) {
                    $res['ClusterInfoSimple'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInfoSimple'])) {
            if (!empty($map['ClusterInfoSimple'])) {
                $model->clusterInfoSimple = [];
                $n                        = 0;
                foreach ($map['ClusterInfoSimple'] as $item) {
                    $model->clusterInfoSimple[$n++] = null !== $item ? clusterInfoSimple::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
