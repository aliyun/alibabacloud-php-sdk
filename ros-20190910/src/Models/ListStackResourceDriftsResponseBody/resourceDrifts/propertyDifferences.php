<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts;

use AlibabaCloud\Dara\Model;

class propertyDifferences extends Model
{
    /**
     * @var string
     */
    public $actualValue;
    /**
     * @var string
     */
    public $differenceType;
    /**
     * @var string
     */
    public $expectedValue;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
