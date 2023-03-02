<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class inputParameters extends Model
{
    /**
     * @description The name of the input parameter of the node. In the code, you can use the ${...} method to reference the input parameter of the node.
     *
     * This parameter corresponds to the Parameter Name parameter in the Input Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example input
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The value source of the input parameter of the node.
     *
     * This parameter corresponds to the Value Source parameter in the Input Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example project_001.parent_node:outputs
     *
     * @var string
     */
    public $valueSource;
    protected $_name = [
        'parameterName' => 'ParameterName',
        'valueSource'   => 'ValueSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->valueSource) {
            $res['ValueSource'] = $this->valueSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ValueSource'])) {
            $model->valueSource = $map['ValueSource'];
        }

        return $model;
    }
}
