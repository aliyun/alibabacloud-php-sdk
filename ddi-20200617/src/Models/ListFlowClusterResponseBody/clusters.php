<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterResponseBody\clusters\clusterInfo;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var clusterInfo[]
     */
    public $clusterInfo;
    protected $_name = [
        'clusterInfo' => 'ClusterInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInfo) {
            $res['ClusterInfo'] = [];
            if (null !== $this->clusterInfo && \is_array($this->clusterInfo)) {
                $n = 0;
                foreach ($this->clusterInfo as $item) {
                    $res['ClusterInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ClusterInfo'])) {
            if (!empty($map['ClusterInfo'])) {
                $model->clusterInfo = [];
                $n                  = 0;
                foreach ($map['ClusterInfo'] as $item) {
                    $model->clusterInfo[$n++] = null !== $item ? clusterInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
