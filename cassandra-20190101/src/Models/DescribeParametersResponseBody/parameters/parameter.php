<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParametersResponseBody\parameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @example R[1000, 60000]
     *
     * @var string
     */
    public $allowedValues;

    /**
     * @example INT
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 1000
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example How long the coordinator should wait for seq or index scans to complete.
     *
     * @var string
     */
    public $description;

    /**
     * @example range_request_timeout_in_ms
     *
     * @var string
     */
    public $name;

    /**
     * @example 1000
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'allowedValues' => 'AllowedValues',
        'dataType'      => 'DataType',
        'defaultValue'  => 'DefaultValue',
        'description'   => 'Description',
        'name'          => 'Name',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedValues) {
            $res['AllowedValues'] = $this->allowedValues;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedValues'])) {
            $model->allowedValues = $map['AllowedValues'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
