<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateRowPermissionRequest\updateRowPermissionCommand\rules;

use AlibabaCloud\Dara\Model;

class expressions extends Model
{
    /**
     * @var string
     */
    public $mappingColumnName;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var mixed[]
     */
    public $subConditions;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'mappingColumnName' => 'MappingColumnName',
        'operator' => 'Operator',
        'subConditions' => 'SubConditions',
        'type' => 'Type',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->subConditions)) {
            Model::validateArray($this->subConditions);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mappingColumnName) {
            $res['MappingColumnName'] = $this->mappingColumnName;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->subConditions) {
            if (\is_array($this->subConditions)) {
                $res['SubConditions'] = [];
                $n1 = 0;
                foreach ($this->subConditions as $item1) {
                    $res['SubConditions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = $item1;
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
        if (isset($map['MappingColumnName'])) {
            $model->mappingColumnName = $map['MappingColumnName'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['SubConditions'])) {
            if (!empty($map['SubConditions'])) {
                $model->subConditions = [];
                $n1 = 0;
                foreach ($map['SubConditions'] as $item1) {
                    $model->subConditions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
