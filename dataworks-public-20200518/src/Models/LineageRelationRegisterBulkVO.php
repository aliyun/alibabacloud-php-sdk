<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class LineageRelationRegisterBulkVO extends Model
{
    /**
     * @example 1684327487964
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @var LineageEntityVO[]
     */
    public $destEntities;

    /**
     * @var RelationshipVO
     */
    public $relationship;

    /**
     * @var LineageEntityVO[]
     */
    public $srcEntities;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'destEntities'    => 'DestEntities',
        'relationship'    => 'Relationship',
        'srcEntities'     => 'SrcEntities',
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
        if (null !== $this->destEntities) {
            $res['DestEntities'] = [];
            if (null !== $this->destEntities && \is_array($this->destEntities)) {
                $n = 0;
                foreach ($this->destEntities as $item) {
                    $res['DestEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationship) {
            $res['Relationship'] = null !== $this->relationship ? $this->relationship->toMap() : null;
        }
        if (null !== $this->srcEntities) {
            $res['SrcEntities'] = [];
            if (null !== $this->srcEntities && \is_array($this->srcEntities)) {
                $n = 0;
                foreach ($this->srcEntities as $item) {
                    $res['SrcEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LineageRelationRegisterBulkVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DestEntities'])) {
            if (!empty($map['DestEntities'])) {
                $model->destEntities = [];
                $n                   = 0;
                foreach ($map['DestEntities'] as $item) {
                    $model->destEntities[$n++] = null !== $item ? LineageEntityVO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Relationship'])) {
            $model->relationship = RelationshipVO::fromMap($map['Relationship']);
        }
        if (isset($map['SrcEntities'])) {
            if (!empty($map['SrcEntities'])) {
                $model->srcEntities = [];
                $n                  = 0;
                foreach ($map['SrcEntities'] as $item) {
                    $model->srcEntities[$n++] = null !== $item ? LineageEntityVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
