<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RelationshipVO extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $relationshipGuid;

    /**
     * @example sql
     *
     * @var string
     */
    public $relationshipType;
    protected $_name = [
        'attributes'       => 'Attributes',
        'relationshipGuid' => 'RelationshipGuid',
        'relationshipType' => 'RelationshipType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->relationshipGuid) {
            $res['RelationshipGuid'] = $this->relationshipGuid;
        }
        if (null !== $this->relationshipType) {
            $res['RelationshipType'] = $this->relationshipType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RelationshipVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['RelationshipGuid'])) {
            $model->relationshipGuid = $map['RelationshipGuid'];
        }
        if (isset($map['RelationshipType'])) {
            $model->relationshipType = $map['RelationshipType'];
        }

        return $model;
    }
}
