<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity;

class ecsList extends Model
{
    /**
     * @var ecsEntity[]
     */
    public $ecsEntity;
    protected $_name = [
        'ecsEntity' => 'EcsEntity',
    ];

    public function validate()
    {
        if (\is_array($this->ecsEntity)) {
            Model::validateArray($this->ecsEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsEntity) {
            if (\is_array($this->ecsEntity)) {
                $res['EcsEntity'] = [];
                $n1 = 0;
                foreach ($this->ecsEntity as $item1) {
                    $res['EcsEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EcsEntity'])) {
            if (!empty($map['EcsEntity'])) {
                $model->ecsEntity = [];
                $n1 = 0;
                foreach ($map['EcsEntity'] as $item1) {
                    $model->ecsEntity[$n1] = ecsEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
