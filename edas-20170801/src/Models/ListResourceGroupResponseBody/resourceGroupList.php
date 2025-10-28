<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity;

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
        if (\is_array($this->resGroupEntity)) {
            Model::validateArray($this->resGroupEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resGroupEntity) {
            if (\is_array($this->resGroupEntity)) {
                $res['ResGroupEntity'] = [];
                $n1 = 0;
                foreach ($this->resGroupEntity as $item1) {
                    $res['ResGroupEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResGroupEntity'])) {
            if (!empty($map['ResGroupEntity'])) {
                $model->resGroupEntity = [];
                $n1 = 0;
                foreach ($map['ResGroupEntity'] as $item1) {
                    $model->resGroupEntity[$n1] = resGroupEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
