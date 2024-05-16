<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class outputParameters extends Model
{
    /**
     * @description The description of the output parameter of the node.
     *
     * @example It\\"s a context output parameter.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the output parameter of the node.
     *
     * This parameter corresponds to the Parameter Name parameter in the Output Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example output
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The type of the output parameter of the node. Valid values:
     *
     *   1: indicates a constant.
     *   2: indicates a variable.
     *   3: indicates a pass-through variable.
     *
     * This parameter corresponds to the Type parameter in the Output Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 1
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the output parameter of the node.
     *
     * This parameter corresponds to the Value parameter in the Output Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example ${bizdate}
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description'   => 'Description',
        'parameterName' => 'ParameterName',
        'type'          => 'Type',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
