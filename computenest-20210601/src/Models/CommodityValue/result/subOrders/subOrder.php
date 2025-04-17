<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result\subOrders\subOrder\moduleInstance;

class subOrder extends Model
{
    /**
     * @var moduleInstance[]
     */
    public $moduleInstance;
    protected $_name = [
        'moduleInstance' => 'ModuleInstance',
    ];

    public function validate()
    {
        if (\is_array($this->moduleInstance)) {
            Model::validateArray($this->moduleInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleInstance) {
            if (\is_array($this->moduleInstance)) {
                $res['ModuleInstance'] = [];
                $n1 = 0;
                foreach ($this->moduleInstance as $item1) {
                    $res['ModuleInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleInstance'])) {
            if (!empty($map['ModuleInstance'])) {
                $model->moduleInstance = [];
                $n1 = 0;
                foreach ($map['ModuleInstance'] as $item1) {
                    $model->moduleInstance[$n1++] = moduleInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
