<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup\parameterGroup\paramDetail;
use AlibabaCloud\Tea\Model;

class parameterGroup extends Model
{
    /**
     * @description The time when the parameter template was created.
     *
     * @example 2019-10-22T06:02:53Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The database engine.
     *
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version.
     *
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Indicates whether the restart of an instance is required for the parameter template to take effect. Valid values:
     *
     *   **0**: A restart is not required.
     *   **1**: A restart is required.
     *
     * @example 1
     *
     * @var int
     */
    public $forceRestart;

    /**
     * @description The number of parameters in the parameter template.
     *
     * @example 2
     *
     * @var int
     */
    public $paramCounts;

    /**
     * @description The array of parameters.
     *
     * @var paramDetail
     */
    public $paramDetail;

    /**
     * @description The description of the parameter template.
     *
     * @example testGroup1
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The ID of the parameter template.
     *
     * @example rpg-dp****
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The name of the parameter template.
     *
     * @example test123456
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description The type of the parameter template. Valid values:
     *
     *   **0**: the default parameter template.
     *   **1**: a custom parameter template.
     *   **2**: an automatic backup parameter template. After you apply this type of template, the system automatically backs up the original parameter settings and saves the backup as a template.
     *
     * @example 1
     *
     * @var int
     */
    public $parameterGroupType;

    /**
     * @description The time when the parameter template was last updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-10-22T06:07:54Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'engine'             => 'Engine',
        'engineVersion'      => 'EngineVersion',
        'forceRestart'       => 'ForceRestart',
        'paramCounts'        => 'ParamCounts',
        'paramDetail'        => 'ParamDetail',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupId'   => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupType' => 'ParameterGroupType',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->paramCounts) {
            $res['ParamCounts'] = $this->paramCounts;
        }
        if (null !== $this->paramDetail) {
            $res['ParamDetail'] = null !== $this->paramDetail ? $this->paramDetail->toMap() : null;
        }
        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }
        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }
        if (null !== $this->parameterGroupType) {
            $res['ParameterGroupType'] = $this->parameterGroupType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['ParamCounts'])) {
            $model->paramCounts = $map['ParamCounts'];
        }
        if (isset($map['ParamDetail'])) {
            $model->paramDetail = paramDetail::fromMap($map['ParamDetail']);
        }
        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if (isset($map['ParameterGroupType'])) {
            $model->parameterGroupType = $map['ParameterGroupType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
