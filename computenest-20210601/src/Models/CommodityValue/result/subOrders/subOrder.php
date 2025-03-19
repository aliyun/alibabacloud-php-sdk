<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder\moduleInstance;
use AlibabaCloud\Tea\Model;

class subOrder extends Model
{
    /**
     * @description 模块（实例）信息。
     *
     * @var moduleInstance[]
     */
    public $moduleInstance;
    protected $_name = [
        'moduleInstance' => 'ModuleInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleInstance) {
            $res['ModuleInstance'] = [];
            if (null !== $this->moduleInstance && \is_array($this->moduleInstance)) {
                $n = 0;
                foreach ($this->moduleInstance as $item) {
                    $res['ModuleInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleInstance'])) {
            if (!empty($map['ModuleInstance'])) {
                $model->moduleInstance = [];
                $n = 0;
                foreach ($map['ModuleInstance'] as $item) {
                    $model->moduleInstance[$n++] = null !== $item ? moduleInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
