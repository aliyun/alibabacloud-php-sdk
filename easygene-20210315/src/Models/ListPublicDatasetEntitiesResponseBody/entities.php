<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListPublicDatasetEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class entities extends Model
{
    /**
     * @var string
     */
    public $entityType;
    protected $_name = [
        'entityType' => 'EntityType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        return $model;
    }
}
