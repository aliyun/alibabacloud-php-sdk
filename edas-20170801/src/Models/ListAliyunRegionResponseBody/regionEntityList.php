<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAliyunRegionResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListAliyunRegionResponseBody\regionEntityList\regionEntity;
use AlibabaCloud\Tea\Model;

class regionEntityList extends Model
{
    /**
     * @var regionEntity[]
     */
    public $regionEntity;
    protected $_name = [
        'regionEntity' => 'RegionEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionEntity) {
            $res['RegionEntity'] = [];
            if (null !== $this->regionEntity && \is_array($this->regionEntity)) {
                $n = 0;
                foreach ($this->regionEntity as $item) {
                    $res['RegionEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionEntity'])) {
            if (!empty($map['RegionEntity'])) {
                $model->regionEntity = [];
                $n                   = 0;
                foreach ($map['RegionEntity'] as $item) {
                    $model->regionEntity[$n++] = null !== $item ? regionEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
