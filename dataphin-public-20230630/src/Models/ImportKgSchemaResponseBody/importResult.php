<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ImportKgSchemaResponseBody;

use AlibabaCloud\Dara\Model;

class importResult extends Model
{
    /**
     * @var int
     */
    public $entityTypeCount;

    /**
     * @var int
     */
    public $relationTypeCount;
    protected $_name = [
        'entityTypeCount' => 'EntityTypeCount',
        'relationTypeCount' => 'RelationTypeCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityTypeCount) {
            $res['EntityTypeCount'] = $this->entityTypeCount;
        }

        if (null !== $this->relationTypeCount) {
            $res['RelationTypeCount'] = $this->relationTypeCount;
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
        if (isset($map['EntityTypeCount'])) {
            $model->entityTypeCount = $map['EntityTypeCount'];
        }

        if (isset($map['RelationTypeCount'])) {
            $model->relationTypeCount = $map['RelationTypeCount'];
        }

        return $model;
    }
}
