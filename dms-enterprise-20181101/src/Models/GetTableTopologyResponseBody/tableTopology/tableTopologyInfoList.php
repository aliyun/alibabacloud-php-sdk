<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponseBody\tableTopology;

use AlibabaCloud\Tea\Model;

class tableTopologyInfoList extends Model
{
    /**
     * @var string
     */
    public $tableNameList;

    /**
     * @var string
     */
    public $tableNameExpr;

    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbSearchName;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceResourceId;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbType;
    protected $_name = [
        'tableNameList'      => 'TableNameList',
        'tableNameExpr'      => 'TableNameExpr',
        'tableCount'         => 'TableCount',
        'dbId'               => 'DbId',
        'dbSearchName'       => 'DbSearchName',
        'instanceId'         => 'InstanceId',
        'regionId'           => 'RegionId',
        'instanceResourceId' => 'InstanceResourceId',
        'instanceSource'     => 'InstanceSource',
        'dbName'             => 'DbName',
        'dbType'             => 'DbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableNameList) {
            $res['TableNameList'] = $this->tableNameList;
        }
        if (null !== $this->tableNameExpr) {
            $res['TableNameExpr'] = $this->tableNameExpr;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbSearchName) {
            $res['DbSearchName'] = $this->dbSearchName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceResourceId) {
            $res['InstanceResourceId'] = $this->instanceResourceId;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
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
        if (isset($map['TableNameList'])) {
            $model->tableNameList = $map['TableNameList'];
        }
        if (isset($map['TableNameExpr'])) {
            $model->tableNameExpr = $map['TableNameExpr'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbSearchName'])) {
            $model->dbSearchName = $map['DbSearchName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceResourceId'])) {
            $model->instanceResourceId = $map['InstanceResourceId'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        return $model;
    }
}
