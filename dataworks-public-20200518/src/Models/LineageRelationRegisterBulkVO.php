<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class LineageRelationRegisterBulkVO extends Model
{
    /**
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
        'destEntities' => 'DestEntities',
        'relationship' => 'Relationship',
        'srcEntities' => 'SrcEntities',
    ];

    public function validate()
    {
        if (\is_array($this->destEntities)) {
            Model::validateArray($this->destEntities);
        }
        if (null !== $this->relationship) {
            $this->relationship->validate();
        }
        if (\is_array($this->srcEntities)) {
            Model::validateArray($this->srcEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->destEntities) {
            if (\is_array($this->destEntities)) {
                $res['DestEntities'] = [];
                $n1 = 0;
                foreach ($this->destEntities as $item1) {
                    $res['DestEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationship) {
            $res['Relationship'] = null !== $this->relationship ? $this->relationship->toArray($noStream) : $this->relationship;
        }

        if (null !== $this->srcEntities) {
            if (\is_array($this->srcEntities)) {
                $res['SrcEntities'] = [];
                $n1 = 0;
                foreach ($this->srcEntities as $item1) {
                    $res['SrcEntities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['DestEntities'])) {
            if (!empty($map['DestEntities'])) {
                $model->destEntities = [];
                $n1 = 0;
                foreach ($map['DestEntities'] as $item1) {
                    $model->destEntities[$n1] = LineageEntityVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Relationship'])) {
            $model->relationship = RelationshipVO::fromMap($map['Relationship']);
        }

        if (isset($map['SrcEntities'])) {
            if (!empty($map['SrcEntities'])) {
                $model->srcEntities = [];
                $n1 = 0;
                foreach ($map['SrcEntities'] as $item1) {
                    $model->srcEntities[$n1] = LineageEntityVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
