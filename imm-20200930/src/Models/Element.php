<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

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
        'elementContents'    => 'ElementContents',
        'elementRelations'   => 'ElementRelations',
        'elementType'        => 'ElementType',
        'objectId'           => 'ObjectId',
        'semanticSimilarity' => 'SemanticSimilarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elementContents) {
            $res['ElementContents'] = [];
            if (null !== $this->elementContents && \is_array($this->elementContents)) {
                $n = 0;
                foreach ($this->elementContents as $item) {
                    $res['ElementContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->elementRelations) {
            $res['ElementRelations'] = [];
            if (null !== $this->elementRelations && \is_array($this->elementRelations)) {
                $n = 0;
                foreach ($this->elementRelations as $item) {
                    $res['ElementRelations'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return Element
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElementContents'])) {
            if (!empty($map['ElementContents'])) {
                $model->elementContents = [];
                $n                      = 0;
                foreach ($map['ElementContents'] as $item) {
                    $model->elementContents[$n++] = null !== $item ? ElementContent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ElementRelations'])) {
            if (!empty($map['ElementRelations'])) {
                $model->elementRelations = [];
                $n                       = 0;
                foreach ($map['ElementRelations'] as $item) {
                    $model->elementRelations[$n++] = null !== $item ? ElementRelation::fromMap($item) : $item;
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
