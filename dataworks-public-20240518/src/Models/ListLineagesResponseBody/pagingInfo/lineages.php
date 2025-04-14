<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListLineagesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LineageEntity;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LineageRelationship;

class lineages extends Model
{
    /**
     * @var LineageEntity
     */
    public $dstEntity;

    /**
     * @var LineageRelationship[]
     */
    public $relationships;

    /**
     * @var LineageEntity
     */
    public $srcEntity;
    protected $_name = [
        'dstEntity' => 'DstEntity',
        'relationships' => 'Relationships',
        'srcEntity' => 'SrcEntity',
    ];

    public function validate()
    {
        if (null !== $this->dstEntity) {
            $this->dstEntity->validate();
        }
        if (\is_array($this->relationships)) {
            Model::validateArray($this->relationships);
        }
        if (null !== $this->srcEntity) {
            $this->srcEntity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstEntity) {
            $res['DstEntity'] = null !== $this->dstEntity ? $this->dstEntity->toArray($noStream) : $this->dstEntity;
        }

        if (null !== $this->relationships) {
            if (\is_array($this->relationships)) {
                $res['Relationships'] = [];
                $n1 = 0;
                foreach ($this->relationships as $item1) {
                    $res['Relationships'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->srcEntity) {
            $res['SrcEntity'] = null !== $this->srcEntity ? $this->srcEntity->toArray($noStream) : $this->srcEntity;
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
        if (isset($map['DstEntity'])) {
            $model->dstEntity = LineageEntity::fromMap($map['DstEntity']);
        }

        if (isset($map['Relationships'])) {
            if (!empty($map['Relationships'])) {
                $model->relationships = [];
                $n1 = 0;
                foreach ($map['Relationships'] as $item1) {
                    $model->relationships[$n1++] = LineageRelationship::fromMap($item1);
                }
            }
        }

        if (isset($map['SrcEntity'])) {
            $model->srcEntity = LineageEntity::fromMap($map['SrcEntity']);
        }

        return $model;
    }
}
