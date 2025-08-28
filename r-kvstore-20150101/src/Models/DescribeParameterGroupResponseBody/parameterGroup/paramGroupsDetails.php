<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody\parameterGroup;

use AlibabaCloud\Dara\Model;

class paramGroupsDetails extends Model
{
    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramValue;
    protected $_name = [
        'paramName' => 'ParamName',
        'paramValue' => 'ParamValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
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
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }

        return $model;
    }
}
