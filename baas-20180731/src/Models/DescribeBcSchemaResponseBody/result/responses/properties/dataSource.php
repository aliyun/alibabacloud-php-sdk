<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBcSchemaResponseBody\result\responses\properties;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @var int
     */
    public $allowNull;

    /**
     * @var string
     */
    public $annotation;

    /**
     * @var string
     */
    public $field;

    /**
     * @var int
     */
    public $indexes;

    /**
     * @var int
     */
    public $key;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $reg;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowNull'  => 'AllowNull',
        'annotation' => 'Annotation',
        'field'      => 'Field',
        'indexes'    => 'Indexes',
        'key'        => 'Key',
        'length'     => 'Length',
        'reg'        => 'Reg',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowNull) {
            $res['AllowNull'] = $this->allowNull;
        }
        if (null !== $this->annotation) {
            $res['Annotation'] = $this->annotation;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->indexes) {
            $res['Indexes'] = $this->indexes;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->reg) {
            $res['Reg'] = $this->reg;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowNull'])) {
            $model->allowNull = $map['AllowNull'];
        }
        if (isset($map['Annotation'])) {
            $model->annotation = $map['Annotation'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Indexes'])) {
            $model->indexes = $map['Indexes'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['Reg'])) {
            $model->reg = $map['Reg'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
