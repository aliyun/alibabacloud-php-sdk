<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListLineagesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LineageEntity;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LineageRelationship;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstEntity) {
            $res['DstEntity'] = null !== $this->dstEntity ? $this->dstEntity->toMap() : null;
        }
        if (null !== $this->relationships) {
            $res['Relationships'] = [];
            if (null !== $this->relationships && \is_array($this->relationships)) {
                $n = 0;
                foreach ($this->relationships as $item) {
                    $res['Relationships'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->srcEntity) {
            $res['SrcEntity'] = null !== $this->srcEntity ? $this->srcEntity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lineages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstEntity'])) {
            $model->dstEntity = LineageEntity::fromMap($map['DstEntity']);
        }
        if (isset($map['Relationships'])) {
            if (!empty($map['Relationships'])) {
                $model->relationships = [];
                $n = 0;
                foreach ($map['Relationships'] as $item) {
                    $model->relationships[$n++] = null !== $item ? LineageRelationship::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SrcEntity'])) {
            $model->srcEntity = LineageEntity::fromMap($map['SrcEntity']);
        }

        return $model;
    }
}
