<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersResponseBody;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The valid value range of the parameter.  It is an array with two string elements, which represents a range. The first element represents the minimum value and the second element represents the maximum value.
     *
     * @var string[]
     */
    public $acceptableValue;

    /**
     * @description The current value of the parameter.
     *
     * @example 600
     *
     * @var string
     */
    public $currentValue;

    /**
     * @description The default value of the parameter.
     *
     * @example 600s
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The description of the parameter.
     *
     * @example The maximum delay allowed in weak-consistency reads.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the parameter.
     *
     * @example connect_timeout
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether a restart is required for changes to the parameter to take effect. Valid values:
     * - false: A restart is not required.
     * @example false
     *
     * @var bool
     */
    public $needReboot;

    /**
     * @description The invalid value range of the parameter.
     * It is an array with two string elements, which represents a range. The first element represents the minimum value and the second element represents the maximum value.
     * @var string[]
     */
    public $rejectedValue;

    /**
     * @description The type of the parameter value.    Valid values:
     * - CAPACITY: a storage capacity, in KB, MB, or GB.
     * @example CAPACITY
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'acceptableValue' => 'AcceptableValue',
        'currentValue'    => 'CurrentValue',
        'defaultValue'    => 'DefaultValue',
        'description'     => 'Description',
        'name'            => 'Name',
        'needReboot'      => 'NeedReboot',
        'rejectedValue'   => 'RejectedValue',
        'valueType'       => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptableValue) {
            $res['AcceptableValue'] = $this->acceptableValue;
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
        if (null !== $this->rejectedValue) {
            $res['RejectedValue'] = $this->rejectedValue;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptableValue'])) {
            if (!empty($map['AcceptableValue'])) {
                $model->acceptableValue = $map['AcceptableValue'];
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
        if (isset($map['RejectedValue'])) {
            if (!empty($map['RejectedValue'])) {
                $model->rejectedValue = $map['RejectedValue'];
            }
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
