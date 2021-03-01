<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity;
use AlibabaCloud\Tea\Model;

class resourceGroupList extends Model
{
    /**
     * @var resGroupEntity[]
     */
    public $resGroupEntity;
    protected $_name = [
        'resGroupEntity' => 'ResGroupEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resGroupEntity) {
            $res['ResGroupEntity'] = [];
            if (null !== $this->resGroupEntity && \is_array($this->resGroupEntity)) {
                $n = 0;
                foreach ($this->resGroupEntity as $item) {
                    $res['ResGroupEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResGroupEntity'])) {
            if (!empty($map['ResGroupEntity'])) {
                $model->resGroupEntity = [];
                $n                     = 0;
                foreach ($map['ResGroupEntity'] as $item) {
                    $model->resGroupEntity[$n++] = null !== $item ? resGroupEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
