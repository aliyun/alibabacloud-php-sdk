<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\Tea\Model;

class moduleInstance extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance[]
     */
    public $moduleInstance;
    protected $_name = [
        'moduleInstance' => 'ModuleInstance',
    ];

    public function validate()
    {
    }

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
     * @return moduleInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleInstance'])) {
            if (!empty($map['ModuleInstance'])) {
                $model->moduleInstance = [];
                $n                     = 0;
                foreach ($map['ModuleInstance'] as $item) {
                    $model->moduleInstance[$n++] = null !== $item ? \AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
