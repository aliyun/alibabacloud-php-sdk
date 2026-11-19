<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchCreateKgRelationResponseBody\createResult;

use AlibabaCloud\Dara\Model;

class successRelationList extends Model
{
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
        'relationId' => 'RelationId',
        'relationType' => 'RelationType',
        'sourceEntityId' => 'SourceEntityId',
        'targetEntityId' => 'TargetEntityId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
