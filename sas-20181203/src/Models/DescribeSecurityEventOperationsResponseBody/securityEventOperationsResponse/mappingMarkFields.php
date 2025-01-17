<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;

use AlibabaCloud\Dara\Model;

class mappingMarkFields extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $fillType;
    /**
     * @var int
     */
    public $maxLength;
    /**
     * @var int
     */
    public $minLength;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $required;
    /**
     * @var string
     */
    public $showName;
    /**
     * @var string
     */
    public $showValue;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
