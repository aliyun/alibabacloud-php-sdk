<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;

use AlibabaCloud\Tea\Model;

class mappingMarkFields extends Model
{
    /**
     * @description The description of the field that is added to the whitelist.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the value of the field can be changed.
     *
     *   **CUSTOM**: The value of the field can be changed.
     *   **SYSTEM**: The value of the field cannot be changed.
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $fillType;

    /**
     * @description The maximum length of the field that is added to the whitelist.
     *
     * @example 2048
     *
     * @var int
     */
    public $maxLength;

    /**
     * @description The minimum length of the field that is added to the whitelist.
     *
     * @example 1024
     *
     * @var int
     */
    public $minLength;

    /**
     * @description The name of the field that is added to the whitelist.
     *
     * @example pid
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the parameter is required. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $required;

    /**
     * @description The display name of the field that can be used in the whitelist rule.
     *
     * @example pid
     *
     * @var string
     */
    public $showName;

    /**
     * @description The display name of the field that is added to the whitelist.
     *
     * @example 1791
     *
     * @var string
     */
    public $showValue;

    /**
     * @description The value of the field that is added to the whitelist.
     *
     * @example 1791
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'fillType'    => 'FillType',
        'maxLength'   => 'MaxLength',
        'minLength'   => 'MinLength',
        'name'        => 'Name',
        'required'    => 'Required',
        'showName'    => 'ShowName',
        'showValue'   => 'ShowValue',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fillType) {
            $res['FillType'] = $this->fillType;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->showValue) {
            $res['ShowValue'] = $this->showValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mappingMarkFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FillType'])) {
            $model->fillType = $map['FillType'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['ShowValue'])) {
            $model->showValue = $map['ShowValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
