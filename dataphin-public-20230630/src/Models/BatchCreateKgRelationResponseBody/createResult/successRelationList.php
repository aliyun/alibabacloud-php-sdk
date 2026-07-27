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
    protected $_name = [
        'relationId' => 'RelationId',
        'relationType' => 'RelationType',
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

        return $model;
    }
}
