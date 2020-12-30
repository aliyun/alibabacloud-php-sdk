<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetCustomFieldsByTemplateIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $editable;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $isRemember;

    /**
     * @var bool
     */
    public $isDelete;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $fieldFormat;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dynamic;

    /**
     * @var bool
     */
    public $isRequired;

    /**
     * @var string
     */
    public $nameI18N;

    /**
     * @var string
     */
    public $possibleValues;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $other;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'type'           => 'Type',
        'editable'       => 'Editable',
        'createdAt'      => 'CreatedAt',
        'isRemember'     => 'IsRemember',
        'isDelete'       => 'IsDelete',
        'defaultValue'   => 'DefaultValue',
        'maxLength'      => 'MaxLength',
        'fieldFormat'    => 'FieldFormat',
        'description'    => 'Description',
        'dynamic'        => 'Dynamic',
        'isRequired'     => 'IsRequired',
        'nameI18N'       => 'NameI18N',
        'possibleValues' => 'PossibleValues',
        'minLength'      => 'MinLength',
        'updatedAt'      => 'UpdatedAt',
        'name'           => 'Name',
        'other'          => 'Other',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->editable) {
            $res['Editable'] = $this->editable;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->isRemember) {
            $res['IsRemember'] = $this->isRemember;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->fieldFormat) {
            $res['FieldFormat'] = $this->fieldFormat;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
        }
        if (null !== $this->isRequired) {
            $res['IsRequired'] = $this->isRequired;
        }
        if (null !== $this->nameI18N) {
            $res['NameI18N'] = $this->nameI18N;
        }
        if (null !== $this->possibleValues) {
            $res['PossibleValues'] = $this->possibleValues;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->other) {
            $res['Other'] = $this->other;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Editable'])) {
            $model->editable = $map['Editable'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['IsRemember'])) {
            $model->isRemember = $map['IsRemember'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['FieldFormat'])) {
            $model->fieldFormat = $map['FieldFormat'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
        }
        if (isset($map['IsRequired'])) {
            $model->isRequired = $map['IsRequired'];
        }
        if (isset($map['NameI18N'])) {
            $model->nameI18N = $map['NameI18N'];
        }
        if (isset($map['PossibleValues'])) {
            $model->possibleValues = $map['PossibleValues'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Other'])) {
            $model->other = $map['Other'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
