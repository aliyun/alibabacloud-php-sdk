<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponseBody\data\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponseBody\data\items\definition\valueOptions;

class definition extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $inputType;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $minValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var valueOptions[]
     */
    public $valueOptions;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string
     */
    public $valueUnit;
    protected $_name = [
        'defaultValue' => 'defaultValue',
        'description' => 'description',
        'displayName' => 'displayName',
        'group' => 'group',
        'inputType' => 'inputType',
        'maxLength' => 'maxLength',
        'maxValue' => 'maxValue',
        'minLength' => 'minLength',
        'minValue' => 'minValue',
        'name' => 'name',
        'readOnly' => 'readOnly',
        'regex' => 'regex',
        'valueOptions' => 'valueOptions',
        'valueType' => 'valueType',
        'valueUnit' => 'valueUnit',
    ];

    public function validate()
    {
        if (\is_array($this->valueOptions)) {
            Model::validateArray($this->valueOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->inputType) {
            $res['inputType'] = $this->inputType;
        }

        if (null !== $this->maxLength) {
            $res['maxLength'] = $this->maxLength;
        }

        if (null !== $this->maxValue) {
            $res['maxValue'] = $this->maxValue;
        }

        if (null !== $this->minLength) {
            $res['minLength'] = $this->minLength;
        }

        if (null !== $this->minValue) {
            $res['minValue'] = $this->minValue;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->readOnly) {
            $res['readOnly'] = $this->readOnly;
        }

        if (null !== $this->regex) {
            $res['regex'] = $this->regex;
        }

        if (null !== $this->valueOptions) {
            if (\is_array($this->valueOptions)) {
                $res['valueOptions'] = [];
                $n1 = 0;
                foreach ($this->valueOptions as $item1) {
                    $res['valueOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
        }

        if (null !== $this->valueUnit) {
            $res['valueUnit'] = $this->valueUnit;
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
        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['inputType'])) {
            $model->inputType = $map['inputType'];
        }

        if (isset($map['maxLength'])) {
            $model->maxLength = $map['maxLength'];
        }

        if (isset($map['maxValue'])) {
            $model->maxValue = $map['maxValue'];
        }

        if (isset($map['minLength'])) {
            $model->minLength = $map['minLength'];
        }

        if (isset($map['minValue'])) {
            $model->minValue = $map['minValue'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['readOnly'])) {
            $model->readOnly = $map['readOnly'];
        }

        if (isset($map['regex'])) {
            $model->regex = $map['regex'];
        }

        if (isset($map['valueOptions'])) {
            if (!empty($map['valueOptions'])) {
                $model->valueOptions = [];
                $n1 = 0;
                foreach ($map['valueOptions'] as $item1) {
                    $model->valueOptions[$n1] = valueOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        if (isset($map['valueUnit'])) {
            $model->valueUnit = $map['valueUnit'];
        }

        return $model;
    }
}
