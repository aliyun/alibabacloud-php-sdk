<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts;

use AlibabaCloud\Tea\Model;

class propertyDifferences extends Model
{
    /**
     * @description __null__
     *
     * @example test1
     *
     * @var string
     */
    public $actualValue;

    /**
     * @description __null__
     *
     * @example NOT_EQUAL
     *
     * @var string
     */
    public $differenceType;

    /**
     * @description ListStackResourceDrifts
     *
     * @example test2
     *
     * @var string
     */
    public $expectedValue;

    /**
     * @description __null__
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
