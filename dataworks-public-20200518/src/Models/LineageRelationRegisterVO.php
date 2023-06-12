<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class LineageRelationRegisterVO extends Model
{
    /**
     * @example 1684327487964
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @var LineageEntityVO
     */
    public $destEntity;

    /**
     * @var RelationshipVO
     */
    public $relationship;

    /**
     * @var LineageEntityVO
     */
    public $srcEntity;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'destEntity'      => 'DestEntity',
        'relationship'    => 'Relationship',
        'srcEntity'       => 'SrcEntity',
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
        if (null !== $this->destEntity) {
            $res['DestEntity'] = null !== $this->destEntity ? $this->destEntity->toMap() : null;
        }
        if (null !== $this->relationship) {
            $res['Relationship'] = null !== $this->relationship ? $this->relationship->toMap() : null;
        }
        if (null !== $this->srcEntity) {
            $res['SrcEntity'] = null !== $this->srcEntity ? $this->srcEntity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LineageRelationRegisterVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DestEntity'])) {
            $model->destEntity = LineageEntityVO::fromMap($map['DestEntity']);
        }
        if (isset($map['Relationship'])) {
            $model->relationship = RelationshipVO::fromMap($map['Relationship']);
        }
        if (isset($map['SrcEntity'])) {
            $model->srcEntity = LineageEntityVO::fromMap($map['SrcEntity']);
        }

        return $model;
    }
}
