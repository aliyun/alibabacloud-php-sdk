<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class parameterGroups extends Model
{
    /**
     * @description The time when the parameter template was created. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2023-03-10T08:40:39Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The type of the engine.
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description Indicates whether to restart the cluster when this parameter template is applied. Valid values:
     *
     *   **0**: A restart is not required.
     *   **1**: A restart is required.
     *
     * @example 1
     *
     * @var string
     */
    public $forceRestart;

    /**
     * @description The number of parameters in the parameter template.
     *
     * @example 2
     *
     * @var int
     */
    public $parameterCounts;

    /**
     * @description The description of the parameter template.
     *
     * @example testgroup
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The ID of the parameter template.
     *
     * @example pcpg-**************
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The name of the parameter template.
     *
     * @example test
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
