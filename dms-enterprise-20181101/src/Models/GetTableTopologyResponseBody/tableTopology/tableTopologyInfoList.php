<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponseBody\tableTopology;

use AlibabaCloud\Tea\Model;

class tableTopologyInfoList extends Model
{
    /**
     * @example 43215
     *
     * @var int
     */
    public $dbId;

    /**
     * @example yuyang_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @example yuyang_test@localhost:3306【yuyang_test_dev】
     *
     * @var string
     */
    public $dbSearchName;

    /**
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @example 4325325
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example rm-xxx
     *
     * @var string
     */
    public $instanceResourceId;

    /**
     * @example RDS
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 6
     *
     * @var int
     */
    public $tableCount;

    /**
     * @example test_ch_[0000-0005]
     *
     * @var string
     */
    public $tableNameExpr;

    /**
     * @example test_ch_0000,test_ch_0001,test_ch_0002,test_ch_0003,test_ch_0004,test_ch_0005
     *
     * @var string
     */
    public $tableNameList;
    protected $_name = [
        'dbId'               => 'DbId',
        'dbName'             => 'DbName',
        'dbSearchName'       => 'DbSearchName',
        'dbType'             => 'DbType',
        'instanceId'         => 'InstanceId',
        'instanceResourceId' => 'InstanceResourceId',
        'instanceSource'     => 'InstanceSource',
        'regionId'           => 'RegionId',
        'tableCount'         => 'TableCount',
        'tableNameExpr'      => 'TableNameExpr',
        'tableNameList'      => 'TableNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbSearchName) {
            $res['DbSearchName'] = $this->dbSearchName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceResourceId) {
            $res['InstanceResourceId'] = $this->instanceResourceId;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->tableNameExpr) {
            $res['TableNameExpr'] = $this->tableNameExpr;
        }
        if (null !== $this->tableNameList) {
            $res['TableNameList'] = $this->tableNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableTopologyInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbSearchName'])) {
            $model->dbSearchName = $map['DbSearchName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceResourceId'])) {
            $model->instanceResourceId = $map['InstanceResourceId'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['TableNameExpr'])) {
            $model->tableNameExpr = $map['TableNameExpr'];
        }
        if (isset($map['TableNameList'])) {
            $model->tableNameList = $map['TableNameList'];
        }

        return $model;
    }
}
