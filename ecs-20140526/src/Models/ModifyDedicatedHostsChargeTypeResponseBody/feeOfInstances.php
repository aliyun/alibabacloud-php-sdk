<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeResponseBody\feeOfInstances\feeOfInstance;

class feeOfInstances extends Model
{
    /**
     * @var feeOfInstance[]
     */
    public $feeOfInstance;
    protected $_name = [
        'feeOfInstance' => 'FeeOfInstance',
    ];

    public function validate()
    {
        if (\is_array($this->feeOfInstance)) {
            Model::validateArray($this->feeOfInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feeOfInstance) {
            if (\is_array($this->feeOfInstance)) {
                $res['FeeOfInstance'] = [];
                $n1 = 0;
                foreach ($this->feeOfInstance as $item1) {
                    $res['FeeOfInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FeeOfInstance'])) {
            if (!empty($map['FeeOfInstance'])) {
                $model->feeOfInstance = [];
                $n1 = 0;
                foreach ($map['FeeOfInstance'] as $item1) {
                    $model->feeOfInstance[$n1++] = feeOfInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
