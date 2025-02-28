<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody;

use AlibabaCloud\Dara\Model;

class paramGroupInfo extends Model
{
    /**
     * @var string
     */
    public $paramGroupId;
    /**
     * @var string
     */
    public $parameterGroupDesc;
    /**
     * @var string
     */
    public $parameterGroupName;
    /**
     * @var string
     */
    public $parameterGroupType;
    protected $_name = [
        'paramGroupId'       => 'ParamGroupId',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupType' => 'ParameterGroupType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramGroupId) {
            $res['ParamGroupId'] = $this->paramGroupId;
        }

        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }

        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }

        if (null !== $this->parameterGroupType) {
            $res['ParameterGroupType'] = $this->parameterGroupType;
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
        if (isset($map['ParamGroupId'])) {
            $model->paramGroupId = $map['ParamGroupId'];
        }

        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }

        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }

        if (isset($map['ParameterGroupType'])) {
            $model->parameterGroupType = $map['ParameterGroupType'];
        }

        return $model;
    }
}
