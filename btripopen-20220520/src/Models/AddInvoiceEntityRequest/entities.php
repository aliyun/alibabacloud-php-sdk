<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddInvoiceEntityRequest;

use AlibabaCloud\Dara\Model;

class entities extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;
    protected $_name = [
        'entityId' => 'entity_id',
        'entityName' => 'entity_name',
        'entityType' => 'entity_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }

        if (null !== $this->entityName) {
            $res['entity_name'] = $this->entityName;
        }

        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
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
        if (isset($map['entity_id'])) {
            $model->entityId = $map['entity_id'];
        }

        if (isset($map['entity_name'])) {
            $model->entityName = $map['entity_name'];
        }

        if (isset($map['entity_type'])) {
            $model->entityType = $map['entity_type'];
        }

        return $model;
    }
}
