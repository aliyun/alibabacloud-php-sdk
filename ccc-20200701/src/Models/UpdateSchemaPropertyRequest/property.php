<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyRequest;

use AlibabaCloud\Dara\Model;

class property extends Model
{
    /**
     * @var bool
     */
    public $array;
    /**
     * @var string
     */
    public $attributes;
    /**
     * @var string
     */
    public $dataType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $disabled;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var int
     */
    public $displayOrder;
    /**
     * @var string
     */
    public $editorType;
    /**
     * @var int
     */
    public $maxLength;
    /**
     * @var float
     */
    public $maximum;
    /**
     * @var int
     */
    public $minLength;
    /**
     * @var float
     */
    public $minimum;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $pattern;
    /**
     * @var string
     */
    public $patternErrorMessage;
    /**
     * @var bool
     */
    public $readOnly;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
