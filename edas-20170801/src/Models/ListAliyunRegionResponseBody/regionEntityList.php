<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAliyunRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListAliyunRegionResponseBody\regionEntityList\regionEntity;

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
        if (\is_array($this->regionEntity)) {
            Model::validateArray($this->regionEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionEntity) {
            if (\is_array($this->regionEntity)) {
                $res['RegionEntity'] = [];
                $n1 = 0;
                foreach ($this->regionEntity as $item1) {
                    $res['RegionEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionEntity'])) {
            if (!empty($map['RegionEntity'])) {
                $model->regionEntity = [];
                $n1 = 0;
                foreach ($map['RegionEntity'] as $item1) {
                    $model->regionEntity[$n1] = regionEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
