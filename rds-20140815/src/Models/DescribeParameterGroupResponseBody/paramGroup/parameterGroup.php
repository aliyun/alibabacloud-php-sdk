<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup\parameterGroup\paramDetail;
use AlibabaCloud\Tea\Model;

class parameterGroup extends Model
{
    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $forceRestart;

    /**
     * @var string
     */
    public $parameterGroupId;

    /**
     * @var string
     */
    public $parameterGroupName;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $paramCounts;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $parameterGroupType;

    /**
     * @var paramDetail
     */
    public $paramDetail;
    protected $_name = [
        'updateTime'         => 'UpdateTime',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'createTime'         => 'CreateTime',
        'forceRestart'       => 'ForceRestart',
        'parameterGroupId'   => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'engine'             => 'Engine',
        'paramCounts'        => 'ParamCounts',
        'engineVersion'      => 'EngineVersion',
        'parameterGroupType' => 'ParameterGroupType',
        'paramDetail'        => 'ParamDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }
        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->paramCounts) {
            $res['ParamCounts'] = $this->paramCounts;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->parameterGroupType) {
            $res['ParameterGroupType'] = $this->parameterGroupType;
        }
        if (null !== $this->paramDetail) {
            $res['ParamDetail'] = null !== $this->paramDetail ? $this->paramDetail->toMap() : null;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ParamCounts'])) {
            $model->paramCounts = $map['ParamCounts'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ParameterGroupType'])) {
            $model->parameterGroupType = $map['ParameterGroupType'];
        }
        if (isset($map['ParamDetail'])) {
            $model->paramDetail = paramDetail::fromMap($map['ParamDetail']);
        }

        return $model;
    }
}
