<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetRequest;

use AlibabaCloud\Tea\Model;

class entityDOList extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $entityId;

    /**
     * @example 1
     *
     * @var string
     */
    public $entityType;
    protected $_name = [
        'entityId'   => 'entity_id',
        'entityType' => 'entity_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entity_id'])) {
            $model->entityId = $map['entity_id'];
        }
        if (isset($map['entity_type'])) {
            $model->entityType = $map['entity_type'];
        }

        return $model;
    }
}
