<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeCapacityHistoryResponseBody;

use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeCapacityHistoryResponseBody\capacityHistoryItems\capacityHistoryModel;
use AlibabaCloud\Tea\Model;

class capacityHistoryItems extends Model
{
    /**
     * @var capacityHistoryModel[]
     */
    public $capacityHistoryModel;
    protected $_name = [
        'capacityHistoryModel' => 'CapacityHistoryModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityHistoryModel) {
            $res['CapacityHistoryModel'] = [];
            if (null !== $this->capacityHistoryModel && \is_array($this->capacityHistoryModel)) {
                $n = 0;
                foreach ($this->capacityHistoryModel as $item) {
                    $res['CapacityHistoryModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityHistoryItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityHistoryModel'])) {
            if (!empty($map['CapacityHistoryModel'])) {
                $model->capacityHistoryModel = [];
                $n                           = 0;
                foreach ($map['CapacityHistoryModel'] as $item) {
                    $model->capacityHistoryModel[$n++] = null !== $item ? capacityHistoryModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
