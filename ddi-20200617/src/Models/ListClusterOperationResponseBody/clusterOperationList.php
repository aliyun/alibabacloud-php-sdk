<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationResponseBody\clusterOperationList\clusterOperation;
use AlibabaCloud\Tea\Model;

class clusterOperationList extends Model
{
    /**
     * @var clusterOperation[]
     */
    public $clusterOperation;
    protected $_name = [
        'clusterOperation' => 'ClusterOperation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterOperation) {
            $res['ClusterOperation'] = [];
            if (null !== $this->clusterOperation && \is_array($this->clusterOperation)) {
                $n = 0;
                foreach ($this->clusterOperation as $item) {
                    $res['ClusterOperation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterOperationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterOperation'])) {
            if (!empty($map['ClusterOperation'])) {
                $model->clusterOperation = [];
                $n                       = 0;
                foreach ($map['ClusterOperation'] as $item) {
                    $model->clusterOperation[$n++] = null !== $item ? clusterOperation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
