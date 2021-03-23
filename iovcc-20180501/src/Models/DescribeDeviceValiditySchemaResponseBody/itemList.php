<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceValiditySchemaResponseBody;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $required;

    /**
     * @var float
     */
    public $maximum;

    /**
     * @var float
     */
    public $minimum;

    /**
     * @var bool
     */
    public $exclusiveMaximum;

    /**
     * @var bool
     */
    public $exclusiveMinimum;

    /**
     * @var string
     */
    public $enumListStr;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var int
     */
    public $minLength;
    protected $_name = [
        'path'             => 'Path',
        'type'             => 'Type',
        'itemType'         => 'ItemType',
        'description'      => 'Description',
        'required'         => 'Required',
        'maximum'          => 'Maximum',
        'minimum'          => 'Minimum',
        'exclusiveMaximum' => 'ExclusiveMaximum',
        'exclusiveMinimum' => 'ExclusiveMinimum',
        'enumListStr'      => 'EnumListStr',
        'maxLength'        => 'MaxLength',
        'minLength'        => 'MinLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }
        if (null !== $this->exclusiveMaximum) {
            $res['ExclusiveMaximum'] = $this->exclusiveMaximum;
        }
        if (null !== $this->exclusiveMinimum) {
            $res['ExclusiveMinimum'] = $this->exclusiveMinimum;
        }
        if (null !== $this->enumListStr) {
            $res['EnumListStr'] = $this->enumListStr;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }
        if (isset($map['ExclusiveMaximum'])) {
            $model->exclusiveMaximum = $map['ExclusiveMaximum'];
        }
        if (isset($map['ExclusiveMinimum'])) {
            $model->exclusiveMinimum = $map['ExclusiveMinimum'];
        }
        if (isset($map['EnumListStr'])) {
            $model->enumListStr = $map['EnumListStr'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }

        return $model;
    }
}
