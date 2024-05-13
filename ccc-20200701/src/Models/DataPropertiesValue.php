<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DataPropertiesValue extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example name
     *
     * @var string
     */
    public $description;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example string
     *
     * @var string
     */
    public $dataType;

    /**
     * @example ^
     *
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $patternErrorMessage;

    /**
     * @example 1
     *
     * @var int
     */
    public $minLength;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxLength;

    /**
     * @example 1
     *
     * @var float
     */
    public $minimum;

    /**
     * @example 10
     *
     * @var float
     */
    public $maximum;

    /**
     * @example false
     *
     * @var bool
     */
    public $required;

    /**
     * @example false
     *
     * @var bool
     */
    public $system;

    /**
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @example false
     *
     * @var bool
     */
    public $array;

    /**
     * @example false
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @example textbox
     *
     * @var string
     */
    public $editorType;

    /**
     * @example {}
     *
     * @var string
     */
    public $attributes;

    /**
     * @example 1
     *
     * @var int
     */
    public $displayOrder;

    /**
     * @example 2021-07-14 10:48:43.0
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example 2021-07-14 10:48:43.0
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @example tom
     *
     * @var string
     */
    public $creator;
    protected $_name = [
        'displayName'         => 'DisplayName',
        'description'         => 'Description',
        'name'                => 'Name',
        'dataType'            => 'DataType',
        'pattern'             => 'Pattern',
        'patternErrorMessage' => 'PatternErrorMessage',
        'minLength'           => 'MinLength',
        'maxLength'           => 'MaxLength',
        'minimum'             => 'Minimum',
        'maximum'             => 'Maximum',
        'required'            => 'Required',
        'system'              => 'System',
        'disabled'            => 'Disabled',
        'array'               => 'Array',
        'readOnly'            => 'ReadOnly',
        'editorType'          => 'EditorType',
        'attributes'          => 'Attributes',
        'displayOrder'        => 'DisplayOrder',
        'createdTime'         => 'CreatedTime',
        'updatedTime'         => 'UpdatedTime',
        'creator'             => 'Creator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->patternErrorMessage) {
            $res['PatternErrorMessage'] = $this->patternErrorMessage;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->array) {
            $res['Array'] = $this->array;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->editorType) {
            $res['EditorType'] = $this->editorType;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->displayOrder) {
            $res['DisplayOrder'] = $this->displayOrder;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataPropertiesValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['PatternErrorMessage'])) {
            $model->patternErrorMessage = $map['PatternErrorMessage'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Array'])) {
            $model->array = $map['Array'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['EditorType'])) {
            $model->editorType = $map['EditorType'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['DisplayOrder'])) {
            $model->displayOrder = $map['DisplayOrder'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        return $model;
    }
}
