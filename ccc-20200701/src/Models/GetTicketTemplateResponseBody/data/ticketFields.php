<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketTemplateResponseBody\data;

use AlibabaCloud\Tea\Model;

class ticketFields extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $array;

    /**
     * @example {}
     *
     * @var string
     */
    public $attributes;

    /**
     * @example 1717664210000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example creator@cccV2-kmz
     *
     * @var string
     */
    public $creator;

    /**
     * @example string
     *
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 1
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
     * @example 30
     *
     * @var int
     */
    public $maxLength;

    /**
     * @example 10
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
     * @example 1
     *
     * @var float
     */
    public $minimum;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

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
     * @example false
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

    /**
     * @example false
     *
     * @var bool
     */
    public $system;

    /**
     * @example 1717664210000
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'array'               => 'Array',
        'attributes'          => 'Attributes',
        'createdTime'         => 'CreatedTime',
        'creator'             => 'Creator',
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
        'system'              => 'System',
        'updatedTime'         => 'UpdatedTime',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ticketFields
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
