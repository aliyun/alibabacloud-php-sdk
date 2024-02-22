<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTableMetaRequest;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDimensionField;

    /**
     * @var string
     */
    public $isPartitionField;

    /**
     * @var string
     */
    public $meaning;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example BIGINT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dataType'         => 'DataType',
        'isDimensionField' => 'IsDimensionField',
        'isPartitionField' => 'IsPartitionField',
        'meaning'          => 'Meaning',
        'name'             => 'Name',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->isDimensionField) {
            $res['IsDimensionField'] = $this->isDimensionField;
        }
        if (null !== $this->isPartitionField) {
            $res['IsPartitionField'] = $this->isPartitionField;
        }
        if (null !== $this->meaning) {
            $res['Meaning'] = $this->meaning;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['IsDimensionField'])) {
            $model->isDimensionField = $map['IsDimensionField'];
        }
        if (isset($map['IsPartitionField'])) {
            $model->isPartitionField = $map['IsPartitionField'];
        }
        if (isset($map['Meaning'])) {
            $model->meaning = $map['Meaning'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
