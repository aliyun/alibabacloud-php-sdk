<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSystemParametersResponseBody\systemParameters;

use AlibabaCloud\Tea\Model;

class systemParameter extends Model
{
    /**
     * @var string
     */
    public $demoValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramType;
    protected $_name = [
        'demoValue'   => 'DemoValue',
        'description' => 'Description',
        'paramName'   => 'ParamName',
        'paramType'   => 'ParamType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        return $model;
    }
}
