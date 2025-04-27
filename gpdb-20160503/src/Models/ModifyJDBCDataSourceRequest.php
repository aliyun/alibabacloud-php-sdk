<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ModifyJDBCDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $dataSourceDescription;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $JDBCConnectionString;

    /**
     * @var string
     */
    public $JDBCPassword;

    /**
     * @var string
     */
    public $JDBCUserName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'dataSourceDescription' => 'DataSourceDescription',
        'dataSourceId' => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'JDBCConnectionString' => 'JDBCConnectionString',
        'JDBCPassword' => 'JDBCPassword',
        'JDBCUserName' => 'JDBCUserName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->dataSourceDescription) {
            $res['DataSourceDescription'] = $this->dataSourceDescription;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DataSourceDescription'])) {
            $model->dataSourceDescription = $map['DataSourceDescription'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
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
