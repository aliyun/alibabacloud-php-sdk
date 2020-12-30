<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo\ecsOrders\ecsOrderInfo;
use AlibabaCloud\Tea\Model;

class ecsOrders extends Model
{
    /**
     * @var ecsOrderInfo[]
     */
    public $ecsOrderInfo;
    protected $_name = [
        'ecsOrderInfo' => 'EcsOrderInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsOrderInfo) {
            $res['EcsOrderInfo'] = [];
            if (null !== $this->ecsOrderInfo && \is_array($this->ecsOrderInfo)) {
                $n = 0;
                foreach ($this->ecsOrderInfo as $item) {
                    $res['EcsOrderInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsOrders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsOrderInfo'])) {
            if (!empty($map['EcsOrderInfo'])) {
                $model->ecsOrderInfo = [];
                $n                   = 0;
                foreach ($map['EcsOrderInfo'] as $item) {
                    $model->ecsOrderInfo[$n++] = null !== $item ? ecsOrderInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
