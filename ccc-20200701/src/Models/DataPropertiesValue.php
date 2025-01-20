<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class DataPropertiesValue extends Model
{
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $dataType;
    /**
     * @var string
     */
    public $pattern;
    /**
     * @var string
     */
    public $patternErrorMessage;
    /**
     * @var int
     */
    public $minLength;
    /**
     * @var int
     */
    public $maxLength;
    /**
     * @var float
     */
    public $minimum;
    /**
     * @var float
     */
    public $maximum;
    /**
     * @var bool
     */
    public $required;
    /**
     * @var bool
     */
    public $system;
    /**
     * @var bool
     */
    public $disabled;
    /**
     * @var bool
     */
    public $array;
    /**
     * @var bool
     */
    public $readOnly;
    /**
     * @var string
     */
    public $editorType;
    /**
     * @var string
     */
    public $attributes;
    /**
     * @var int
     */
    public $displayOrder;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var int
     */
    public $updatedTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
