<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int[]
     */
    public $identifierFieldIds;

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
        'identifierFieldIds' => 'identifierFieldIds',
        'partitionFields' => 'partitionFields',
        'properties' => 'properties',
    ];

    public function validate()
    {
        if (null !== $this->currentSnapshot) {
            $this->currentSnapshot->validate();
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->identifierFieldIds)) {
            Model::validateArray($this->identifierFieldIds);
        }
        if (\is_array($this->partitionFields)) {
            Model::validateArray($this->partitionFields);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentSnapshot) {
            $res['currentSnapshot'] = null !== $this->currentSnapshot ? $this->currentSnapshot->toArray($noStream) : $this->currentSnapshot;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->identifierFieldIds) {
            if (\is_array($this->identifierFieldIds)) {
                $res['identifierFieldIds'] = [];
                $n1 = 0;
                foreach ($this->identifierFieldIds as $item1) {
                    $res['identifierFieldIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->partitionFields) {
            if (\is_array($this->partitionFields)) {
                $res['partitionFields'] = [];
                $n1 = 0;
                foreach ($this->partitionFields as $item1) {
                    $res['partitionFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
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
        if (isset($map['currentSnapshot'])) {
            $model->currentSnapshot = IcebergSnapshot::fromMap($map['currentSnapshot']);
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1] = IcebergNestedField::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['identifierFieldIds'])) {
            if (!empty($map['identifierFieldIds'])) {
                $model->identifierFieldIds = [];
                $n1 = 0;
                foreach ($map['identifierFieldIds'] as $item1) {
                    $model->identifierFieldIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['partitionFields'])) {
            if (!empty($map['partitionFields'])) {
                $model->partitionFields = [];
                $n1 = 0;
                foreach ($map['partitionFields'] as $item1) {
                    $model->partitionFields[$n1] = IcebergPartitionField::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
