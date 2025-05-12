<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomEntitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomEntitiesResponseBody\customEntities\customEntity;

class customEntities extends Model
{
    /**
     * @var customEntity[]
     */
    public $customEntity;
    protected $_name = [
        'customEntity' => 'CustomEntity',
    ];

    public function validate()
    {
        if (\is_array($this->customEntity)) {
            Model::validateArray($this->customEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customEntity) {
            if (\is_array($this->customEntity)) {
                $res['CustomEntity'] = [];
                $n1 = 0;
                foreach ($this->customEntity as $item1) {
                    $res['CustomEntity'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomEntity'])) {
            if (!empty($map['CustomEntity'])) {
                $model->customEntity = [];
                $n1 = 0;
                foreach ($map['CustomEntity'] as $item1) {
                    $model->customEntity[$n1++] = customEntity::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
