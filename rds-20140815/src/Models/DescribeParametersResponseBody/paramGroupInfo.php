<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody;

use AlibabaCloud\Tea\Model;

class paramGroupInfo extends Model
{
    /**
     * @description The ID of the parameter template.
     *
     * @example rpg-sys-01040401010200
     *
     * @var string
     */
    public $paramGroupId;

    /**
     * @description The description of the parameter template.
     *
     * @example sync_binlog=1000, innodb_flush_log_at_trx_commit=2, async
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The name of the parameter template.
     *
     * @example mysql_innodb_8.0_basic_normal_high
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description The type of the parameter template.
     *
     * @example 0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return paramGroupInfo
     */
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
