<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersResponseBody;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string[]
     */
    public $acceptableValue;

    /**
     * @var string
     */
    public $currentValue;

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
    public $name;

    /**
     * @var bool
     */
    public $needReboot;

    /**
     * @var bool
     */
    public $readonly;

    /**
     * @var string[]
     */
    public $rejectedValue;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'acceptableValue' => 'AcceptableValue',
        'currentValue' => 'CurrentValue',
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'name' => 'Name',
        'needReboot' => 'NeedReboot',
        'readonly' => 'Readonly',
        'rejectedValue' => 'RejectedValue',
        'unit' => 'Unit',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
        if (\is_array($this->acceptableValue)) {
            Model::validateArray($this->acceptableValue);
        }
        if (\is_array($this->rejectedValue)) {
            Model::validateArray($this->rejectedValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptableValue) {
            if (\is_array($this->acceptableValue)) {
                $res['AcceptableValue'] = [];
                $n1 = 0;
                foreach ($this->acceptableValue as $item1) {
                    $res['AcceptableValue'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->currentValue) {
            $res['CurrentValue'] = $this->currentValue;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needReboot) {
            $res['NeedReboot'] = $this->needReboot;
        }

        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
        }

        if (null !== $this->rejectedValue) {
            if (\is_array($this->rejectedValue)) {
                $res['RejectedValue'] = [];
                $n1 = 0;
                foreach ($this->rejectedValue as $item1) {
                    $res['RejectedValue'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
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
        if (isset($map['AcceptableValue'])) {
            if (!empty($map['AcceptableValue'])) {
                $model->acceptableValue = [];
                $n1 = 0;
                foreach ($map['AcceptableValue'] as $item1) {
                    $model->acceptableValue[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CurrentValue'])) {
            $model->currentValue = $map['CurrentValue'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedReboot'])) {
            $model->needReboot = $map['NeedReboot'];
        }

        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }

        if (isset($map['RejectedValue'])) {
            if (!empty($map['RejectedValue'])) {
                $model->rejectedValue = [];
                $n1 = 0;
                foreach ($map['RejectedValue'] as $item1) {
                    $model->rejectedValue[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
