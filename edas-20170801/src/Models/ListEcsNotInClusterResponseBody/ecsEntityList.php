<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListEcsNotInClusterResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcsNotInClusterResponseBody\ecsEntityList\ecsEntity;
use AlibabaCloud\Tea\Model;

class ecsEntityList extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsEntity) {
            $res['EcsEntity'] = [];
            if (null !== $this->ecsEntity && \is_array($this->ecsEntity)) {
                $n = 0;
                foreach ($this->ecsEntity as $item) {
                    $res['EcsEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsEntity'])) {
            if (!empty($map['EcsEntity'])) {
                $model->ecsEntity = [];
                $n                = 0;
                foreach ($map['EcsEntity'] as $item) {
                    $model->ecsEntity[$n++] = null !== $item ? ecsEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
