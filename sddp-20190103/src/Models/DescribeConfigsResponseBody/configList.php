<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @description The code of the common configuration item.
     *
     * @example 1
     *
     * @var string
     */
    public $code;

    /**
     * @description The description of the default value for the common configuration item.
     *
     * @example The volume of logs of a specific type that are generated on the current day is less than 30% of the average volume of logs generated in the previous 10 days.
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The description of the common configuration item.
     *
     * @example Anomalous log output
     *
     * @var string
     */
    public $description;

    /**
     * @description The unique ID of the common configuration item.
     *
     * @example 2133
     *
     * @var int
     */
    public $id;

    /**
     * @description The value of the common configuration item.
     *
     * @example 30
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'code'         => 'Code',
        'defaultValue' => 'DefaultValue',
        'description'  => 'Description',
        'id'           => 'Id',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
