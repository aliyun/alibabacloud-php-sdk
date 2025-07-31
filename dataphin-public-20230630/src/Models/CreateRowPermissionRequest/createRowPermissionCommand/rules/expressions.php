<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand\rules;

use AlibabaCloud\Tea\Model;

class expressions extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example id
     *
     * @var string
     */
    public $mappingColumnName;

    /**
     * @description This parameter is required.
     *
     * @example EQUAL
     *
     * @var string
     */
    public $operator;

    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $subConditions;

    /**
     * @description This parameter is required.
     *
     * @example RELATION
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappingColumnName) {
            $res['MappingColumnName'] = $this->mappingColumnName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->subConditions) {
            $res['SubConditions'] = $this->subConditions;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expressions
     */
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
                $model->subConditions = $map['SubConditions'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
