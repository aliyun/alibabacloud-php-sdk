<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationHostResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationHostResponseBody\clusterOperationHostList\clusterOperationHost;
use AlibabaCloud\Tea\Model;

class clusterOperationHostList extends Model
{
    /**
     * @var clusterOperationHost[]
     */
    public $clusterOperationHost;
    protected $_name = [
        'clusterOperationHost' => 'ClusterOperationHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterOperationHost) {
            $res['ClusterOperationHost'] = [];
            if (null !== $this->clusterOperationHost && \is_array($this->clusterOperationHost)) {
                $n = 0;
                foreach ($this->clusterOperationHost as $item) {
                    $res['ClusterOperationHost'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterOperationHostList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterOperationHost'])) {
            if (!empty($map['ClusterOperationHost'])) {
                $model->clusterOperationHost = [];
                $n                           = 0;
                foreach ($map['ClusterOperationHost'] as $item) {
                    $model->clusterOperationHost[$n++] = null !== $item ? clusterOperationHost::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
