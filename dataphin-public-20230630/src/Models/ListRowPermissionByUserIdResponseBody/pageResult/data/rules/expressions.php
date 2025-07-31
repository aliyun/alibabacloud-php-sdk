<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionByUserIdResponseBody\pageResult\data\rules;

use AlibabaCloud\Tea\Model;

class expressions extends Model
{
    /**
     * @example business_id
     *
     * @var string
     */
    public $mappingColumnName;

    /**
     * @example EQUAL
     *
     * @var string
     */
    public $operator;

    /**
     * @var mixed[]
     */
    public $subConditions;

    /**
     * @example EXPRESSION
     *
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
