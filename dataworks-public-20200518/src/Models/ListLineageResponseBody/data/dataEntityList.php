<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\Entity;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody\data\dataEntityList\relationList;

class dataEntityList extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var Entity
     */
    public $entity;
    /**
     * @var relationList[]
     */
    public $relationList;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'entity'          => 'Entity',
        'relationList'    => 'RelationList',
    ];

    public function validate()
    {
        if (null !== $this->entity) {
            $this->entity->validate();
        }
        if (\is_array($this->relationList)) {
            Model::validateArray($this->relationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->entity) {
            $res['Entity'] = null !== $this->entity ? $this->entity->toArray($noStream) : $this->entity;
        }

        if (null !== $this->relationList) {
            if (\is_array($this->relationList)) {
                $res['RelationList'] = [];
                $n1                  = 0;
                foreach ($this->relationList as $item1) {
                    $res['RelationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Entity'])) {
            $model->entity = Entity::fromMap($map['Entity']);
        }

        if (isset($map['RelationList'])) {
            if (!empty($map['RelationList'])) {
                $model->relationList = [];
                $n1                  = 0;
                foreach ($map['RelationList'] as $item1) {
                    $model->relationList[$n1++] = relationList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
