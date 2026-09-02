<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AgentDataSemanticsJoin extends Model
{
    /**
     * @var AgentDataSemanticsJoinCondition
     */
    public $condition;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $leftTable;

    /**
     * @var string
     */
    public $relationshipType;

    /**
     * @var string
     */
    public $rightTable;
    protected $_name = [
        'condition' => 'Condition',
        'description' => 'Description',
        'leftTable' => 'LeftTable',
        'relationshipType' => 'RelationshipType',
        'rightTable' => 'RightTable',
    ];

    public function validate()
    {
        if (null !== $this->condition) {
            $this->condition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = null !== $this->condition ? $this->condition->toArray($noStream) : $this->condition;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->leftTable) {
            $res['LeftTable'] = $this->leftTable;
        }

        if (null !== $this->relationshipType) {
            $res['RelationshipType'] = $this->relationshipType;
        }

        if (null !== $this->rightTable) {
            $res['RightTable'] = $this->rightTable;
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
        if (isset($map['Condition'])) {
            $model->condition = AgentDataSemanticsJoinCondition::fromMap($map['Condition']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LeftTable'])) {
            $model->leftTable = $map['LeftTable'];
        }

        if (isset($map['RelationshipType'])) {
            $model->relationshipType = $map['RelationshipType'];
        }

        if (isset($map['RightTable'])) {
            $model->rightTable = $map['RightTable'];
        }

        return $model;
    }
}
