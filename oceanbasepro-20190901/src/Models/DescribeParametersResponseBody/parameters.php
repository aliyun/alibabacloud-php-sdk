<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @var string[]
     */
    public $rejectedValue;

    /**
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
