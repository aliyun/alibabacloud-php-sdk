<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Element extends Model
{
    /**
     * @var ElementContent[]
     */
    public $elementContents;

    /**
     * @var ElementRelation[]
     */
    public $elementRelations;

    /**
     * @var string
     */
    public $elementType;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var float
     */
    public $semanticSimilarity;
    protected $_name = [
        'elementContents' => 'ElementContents',
        'elementRelations' => 'ElementRelations',
        'elementType' => 'ElementType',
        'objectId' => 'ObjectId',
        'semanticSimilarity' => 'SemanticSimilarity',
    ];

    public function validate()
    {
        if (\is_array($this->elementContents)) {
            Model::validateArray($this->elementContents);
        }
        if (\is_array($this->elementRelations)) {
            Model::validateArray($this->elementRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elementContents) {
            if (\is_array($this->elementContents)) {
                $res['ElementContents'] = [];
                $n1 = 0;
                foreach ($this->elementContents as $item1) {
                    $res['ElementContents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->elementRelations) {
            if (\is_array($this->elementRelations)) {
                $res['ElementRelations'] = [];
                $n1 = 0;
                foreach ($this->elementRelations as $item1) {
                    $res['ElementRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->elementType) {
            $res['ElementType'] = $this->elementType;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->semanticSimilarity) {
            $res['SemanticSimilarity'] = $this->semanticSimilarity;
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
        if (isset($map['ElementContents'])) {
            if (!empty($map['ElementContents'])) {
                $model->elementContents = [];
                $n1 = 0;
                foreach ($map['ElementContents'] as $item1) {
                    $model->elementContents[$n1] = ElementContent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ElementRelations'])) {
            if (!empty($map['ElementRelations'])) {
                $model->elementRelations = [];
                $n1 = 0;
                foreach ($map['ElementRelations'] as $item1) {
                    $model->elementRelations[$n1] = ElementRelation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ElementType'])) {
            $model->elementType = $map['ElementType'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['SemanticSimilarity'])) {
            $model->semanticSimilarity = $map['SemanticSimilarity'];
        }

        return $model;
    }
}
