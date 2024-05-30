<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\Entity;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody\data\dataEntityList\relationList;
use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @example 1686215809269
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The array of the entity structure.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->entity) {
            $res['Entity'] = null !== $this->entity ? $this->entity->toMap() : null;
        }
        if (null !== $this->relationList) {
            $res['RelationList'] = [];
            if (null !== $this->relationList && \is_array($this->relationList)) {
                $n = 0;
                foreach ($this->relationList as $item) {
                    $res['RelationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
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
                $n                   = 0;
                foreach ($map['RelationList'] as $item) {
                    $model->relationList[$n++] = null !== $item ? relationList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
