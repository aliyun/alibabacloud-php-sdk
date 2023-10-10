<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts;

use AlibabaCloud\Tea\Model;

class propertyDifferences extends Model
{
    /**
     * @description The actual value of the resource property.
     *
     * @example test1
     *
     * @var string
     */
    public $actualValue;

    /**
     * @description The drift type of the resource property. Valid values:
     *
     *   ADD: The value is added to a resource property whose data type is Array or List.
     *   REMOVE: The property is deleted from the current resource configuration.
     *   NOT_EQUAL: The current property value differs from the expected value that is defined in the stack template.
     *
     * @example NOT_EQUAL
     *
     * @var string
     */
    public $differenceType;

    /**
     * @description The expected value of the resource property that is defined in the template.
     *
     * @example test2
     *
     * @var string
     */
    public $expectedValue;

    /**
     * @description The path of the resource property.
     *
     * @example /ScalingRuleName
     *
     * @var string
     */
    public $propertyPath;
    protected $_name = [
        'actualValue'    => 'ActualValue',
        'differenceType' => 'DifferenceType',
        'expectedValue'  => 'ExpectedValue',
        'propertyPath'   => 'PropertyPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualValue) {
            $res['ActualValue'] = $this->actualValue;
        }
        if (null !== $this->differenceType) {
            $res['DifferenceType'] = $this->differenceType;
        }
        if (null !== $this->expectedValue) {
            $res['ExpectedValue'] = $this->expectedValue;
        }
        if (null !== $this->propertyPath) {
            $res['PropertyPath'] = $this->propertyPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyDifferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualValue'])) {
            $model->actualValue = $map['ActualValue'];
        }
        if (isset($map['DifferenceType'])) {
            $model->differenceType = $map['DifferenceType'];
        }
        if (isset($map['ExpectedValue'])) {
            $model->expectedValue = $map['ExpectedValue'];
        }
        if (isset($map['PropertyPath'])) {
            $model->propertyPath = $map['PropertyPath'];
        }

        return $model;
    }
}
