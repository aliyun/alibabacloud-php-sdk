<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyRequest;

use AlibabaCloud\Tea\Model;

class property extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $array;

    /**
     * @example {\\"instanceId\\":\\"4cc3f160-ca64-49ff-bc70-390a044a4e83\\",\\"appId\\":\\"1684145288664\\",\\"commodityCode\\":\\"dide_pre\\",\\"dide_pre_set\\":\\"version_ent\\"}
     *
     * @var string
     */
    public $attributes;

    /**
     * @description This parameter is required.
     *
     * @example string
     *
     * @var string
     */
    public $dataType;

    /**
     * @example -
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 10
     *
     * @var int
     */
    public $displayOrder;

    /**
     * @example textbox
     *
     * @var string
     */
    public $editorType;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxLength;

    /**
     * @example 11
     *
     * @var float
     */
    public $maximum;

    /**
     * @example 1
     *
     * @var int
     */
    public $minLength;

    /**
     * @example 10800
     *
     * @var float
     */
    public $minimum;

    /**
     * @description This parameter is required.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example (.*)
     *
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $patternErrorMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @example false
     *
     * @var bool
     */
    public $required;
    protected $_name = [
        'array'               => 'Array',
        'attributes'          => 'Attributes',
        'dataType'            => 'DataType',
        'description'         => 'Description',
        'disabled'            => 'Disabled',
        'displayName'         => 'DisplayName',
        'displayOrder'        => 'DisplayOrder',
        'editorType'          => 'EditorType',
        'maxLength'           => 'MaxLength',
        'maximum'             => 'Maximum',
        'minLength'           => 'MinLength',
        'minimum'             => 'Minimum',
        'name'                => 'Name',
        'pattern'             => 'Pattern',
        'patternErrorMessage' => 'PatternErrorMessage',
        'readOnly'            => 'ReadOnly',
        'required'            => 'Required',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->array) {
            $res['Array'] = $this->array;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->displayOrder) {
            $res['DisplayOrder'] = $this->displayOrder;
        }
        if (null !== $this->editorType) {
            $res['EditorType'] = $this->editorType;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }
        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->patternErrorMessage) {
            $res['PatternErrorMessage'] = $this->patternErrorMessage;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return property
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Array'])) {
            $model->array = $map['Array'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['DisplayOrder'])) {
            $model->displayOrder = $map['DisplayOrder'];
        }
        if (isset($map['EditorType'])) {
            $model->editorType = $map['EditorType'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }
        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['PatternErrorMessage'])) {
            $model->patternErrorMessage = $map['PatternErrorMessage'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
