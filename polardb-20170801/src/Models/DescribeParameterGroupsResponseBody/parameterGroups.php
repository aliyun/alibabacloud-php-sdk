<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class parameterGroups extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $forceRestart;

    /**
     * @var int
     */
    public $parameterCounts;

    /**
     * @var string
     */
    public $parameterGroupDesc;

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
    public $parameterGroupType;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'DBType'             => 'DBType',
        'DBVersion'          => 'DBVersion',
        'forceRestart'       => 'ForceRestart',
        'parameterCounts'    => 'ParameterCounts',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupId'   => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupType' => 'ParameterGroupType',
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
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->parameterCounts) {
            $res['ParameterCounts'] = $this->parameterCounts;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['ParameterCounts'])) {
            $model->parameterCounts = $map['ParameterCounts'];
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

        return $model;
    }
}
