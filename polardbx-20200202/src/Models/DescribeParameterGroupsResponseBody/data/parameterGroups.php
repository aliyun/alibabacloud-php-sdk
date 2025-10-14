<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterGroupsResponseBody\data;

use AlibabaCloud\Dara\Model;

class parameterGroups extends Model
{
    /**
     * @var bool
     */
    public $cnForceRestart;

    /**
     * @var int
     */
    public $cnParamCount;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $dbVersion;

    /**
     * @var bool
     */
    public $dnForceRestart;

    /**
     * @var int
     */
    public $dnParamCount;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

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

    /**
     * @var string
     */
    public $series;
    protected $_name = [
        'cnForceRestart' => 'CnForceRestart',
        'cnParamCount' => 'CnParamCount',
        'dbType' => 'DbType',
        'dbVersion' => 'DbVersion',
        'dnForceRestart' => 'DnForceRestart',
        'dnParamCount' => 'DnParamCount',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'parameterGroupId' => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupType' => 'ParameterGroupType',
        'series' => 'Series',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnForceRestart) {
            $res['CnForceRestart'] = $this->cnForceRestart;
        }

        if (null !== $this->cnParamCount) {
            $res['CnParamCount'] = $this->cnParamCount;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }

        if (null !== $this->dnForceRestart) {
            $res['DnForceRestart'] = $this->dnForceRestart;
        }

        if (null !== $this->dnParamCount) {
            $res['DnParamCount'] = $this->dnParamCount;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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

        if (null !== $this->series) {
            $res['Series'] = $this->series;
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
        if (isset($map['CnForceRestart'])) {
            $model->cnForceRestart = $map['CnForceRestart'];
        }

        if (isset($map['CnParamCount'])) {
            $model->cnParamCount = $map['CnParamCount'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }

        if (isset($map['DnForceRestart'])) {
            $model->dnForceRestart = $map['DnForceRestart'];
        }

        if (isset($map['DnParamCount'])) {
            $model->dnParamCount = $map['DnParamCount'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        return $model;
    }
}
