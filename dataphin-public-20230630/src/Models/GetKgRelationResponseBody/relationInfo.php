<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgRelationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgRelationResponseBody\relationInfo\propertyList;

class relationInfo extends Model
{
    /**
     * @var propertyList[]
     */
    public $propertyList;

    /**
     * @var string
     */
    public $relationId;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $sourceEntityId;

    /**
     * @var string
     */
    public $targetEntityId;
    protected $_name = [
        'propertyList' => 'PropertyList',
        'relationId' => 'RelationId',
        'relationType' => 'RelationType',
        'sourceEntityId' => 'SourceEntityId',
        'targetEntityId' => 'TargetEntityId',
    ];

    public function validate()
    {
        if (\is_array($this->propertyList)) {
            Model::validateArray($this->propertyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyList) {
            if (\is_array($this->propertyList)) {
                $res['PropertyList'] = [];
                $n1 = 0;
                foreach ($this->propertyList as $item1) {
                    $res['PropertyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->sourceEntityId) {
            $res['SourceEntityId'] = $this->sourceEntityId;
        }

        if (null !== $this->targetEntityId) {
            $res['TargetEntityId'] = $this->targetEntityId;
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
        if (isset($map['PropertyList'])) {
            if (!empty($map['PropertyList'])) {
                $model->propertyList = [];
                $n1 = 0;
                foreach ($map['PropertyList'] as $item1) {
                    $model->propertyList[$n1] = propertyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['SourceEntityId'])) {
            $model->sourceEntityId = $map['SourceEntityId'];
        }

        if (isset($map['TargetEntityId'])) {
            $model->targetEntityId = $map['TargetEntityId'];
        }

        return $model;
    }
}
