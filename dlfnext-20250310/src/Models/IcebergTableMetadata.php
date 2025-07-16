<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class IcebergTableMetadata extends Model
{
    /**
     * @var IcebergSnapshot
     */
    public $currentSnapshot;

    /**
     * @var IcebergNestedField[]
     */
    public $fields;

    /**
     * @var IcebergPartitionField[]
     */
    public $partitionFields;

    /**
     * @var string[]
     */
    public $properties;
    protected $_name = [
        'currentSnapshot' => 'currentSnapshot',
        'fields' => 'fields',
        'partitionFields' => 'partitionFields',
        'properties' => 'properties',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentSnapshot) {
            $res['currentSnapshot'] = null !== $this->currentSnapshot ? $this->currentSnapshot->toMap() : null;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->partitionFields) {
            $res['partitionFields'] = [];
            if (null !== $this->partitionFields && \is_array($this->partitionFields)) {
                $n = 0;
                foreach ($this->partitionFields as $item) {
                    $res['partitionFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IcebergTableMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentSnapshot'])) {
            $model->currentSnapshot = IcebergSnapshot::fromMap($map['currentSnapshot']);
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n = 0;
                foreach ($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? IcebergNestedField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['partitionFields'])) {
            if (!empty($map['partitionFields'])) {
                $model->partitionFields = [];
                $n = 0;
                foreach ($map['partitionFields'] as $item) {
                    $model->partitionFields[$n++] = null !== $item ? IcebergPartitionField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }

        return $model;
    }
}
