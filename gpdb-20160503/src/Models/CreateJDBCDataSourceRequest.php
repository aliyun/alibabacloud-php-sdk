<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateJDBCDataSourceRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Data source description.
     *
     * @example test
     *
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @description The name of data soruce
     *
     * @example jdbc_pxf
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The type of the data source.
     *
     * @example mysql
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The JDBC connection string.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $JDBCConnectionString;

    /**
     * @description The password of the database account.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $JDBCPassword;

    /**
     * @description The name of the database account.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $JDBCUserName;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceName'        => 'DataSourceName',
        'dataSourceType'        => 'DataSourceType',
        'JDBCConnectionString'  => 'JDBCConnectionString',
        'JDBCPassword'          => 'JDBCPassword',
        'JDBCUserName'          => 'JDBCUserName',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSourceDescription) {
            $res['DataSourceDescription'] = $this->dataSourceDescription;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->JDBCConnectionString) {
            $res['JDBCConnectionString'] = $this->JDBCConnectionString;
        }
        if (null !== $this->JDBCPassword) {
            $res['JDBCPassword'] = $this->JDBCPassword;
        }
        if (null !== $this->JDBCUserName) {
            $res['JDBCUserName'] = $this->JDBCUserName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJDBCDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSourceDescription'])) {
            $model->dataSourceDescription = $map['DataSourceDescription'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['JDBCConnectionString'])) {
            $model->JDBCConnectionString = $map['JDBCConnectionString'];
        }
        if (isset($map['JDBCPassword'])) {
            $model->JDBCPassword = $map['JDBCPassword'];
        }
        if (isset($map['JDBCUserName'])) {
            $model->JDBCUserName = $map['JDBCUserName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
