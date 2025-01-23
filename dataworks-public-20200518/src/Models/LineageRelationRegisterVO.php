<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class LineageRelationRegisterVO extends Model
{
    /**
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
        if (null !== $this->destEntity) {
            $this->destEntity->validate();
        }
        if (null !== $this->relationship) {
            $this->relationship->validate();
        }
        if (null !== $this->srcEntity) {
            $this->srcEntity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->destEntity) {
            $res['DestEntity'] = null !== $this->destEntity ? $this->destEntity->toArray($noStream) : $this->destEntity;
        }

        if (null !== $this->relationship) {
            $res['Relationship'] = null !== $this->relationship ? $this->relationship->toArray($noStream) : $this->relationship;
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
