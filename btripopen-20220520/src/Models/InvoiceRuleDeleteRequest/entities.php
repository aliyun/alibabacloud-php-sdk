<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleDeleteRequest;

use AlibabaCloud\Tea\Model;

class entities extends Model
{
    /**
     * @example 12345
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
     * @return entities
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
