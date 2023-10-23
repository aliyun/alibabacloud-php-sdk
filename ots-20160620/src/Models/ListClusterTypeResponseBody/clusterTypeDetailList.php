<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeResponseBody;

use AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeResponseBody\clusterTypeDetailList\clusterTypeDetail;
use AlibabaCloud\Tea\Model;

class clusterTypeDetailList extends Model
{
    /**
     * @var clusterTypeDetail[]
     */
    public $clusterTypeDetail;
    protected $_name = [
        'clusterTypeDetail' => 'ClusterTypeDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypeDetail) {
            $res['ClusterTypeDetail'] = [];
            if (null !== $this->clusterTypeDetail && \is_array($this->clusterTypeDetail)) {
                $n = 0;
                foreach ($this->clusterTypeDetail as $item) {
                    $res['ClusterTypeDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypeDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypeDetail'])) {
            if (!empty($map['ClusterTypeDetail'])) {
                $model->clusterTypeDetail = [];
                $n                        = 0;
                foreach ($map['ClusterTypeDetail'] as $item) {
                    $model->clusterTypeDetail[$n++] = null !== $item ? clusterTypeDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
