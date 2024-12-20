<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody\dataSourceItems;

use AlibabaCloud\Tea\Model;

class remoteDataSources extends Model
{
    /**
     * @description Data source name
     *
     * @example db1_gptest1_to_db2_gp-test2
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description Description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description ID.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description Local database name
     *
     * @example db1
     *
     * @var string
     */
    public $localDatabase;

    /**
     * @description Local instance name
     *
     * @example gp-test1
     *
     * @var string
     */
    public $localInstanceName;

    /**
     * @description Manager user name
     *
     * @example admin
     *
     * @var string
     */
    public $managerUserName;

    /**
     * @description Region ID.
     *
     * > You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) API to view available region IDs.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Remote database name
     *
     * @example db2
     *
     * @var string
     */
    public $remoteDatabase;

    /**
     * @description Remote instance name
     *
     * @example gp-test2
     *
     * @var string
     */
    public $remoteInstanceName;

    /**
     * @description Data source status
     *
     * @example creating
     *
     * @var string
     */
    public $status;

    /**
     * @description User name
     *
     * @example user1
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dataSourceName'     => 'DataSourceName',
        'description'        => 'Description',
        'id'                 => 'Id',
        'localDatabase'      => 'LocalDatabase',
        'localInstanceName'  => 'LocalInstanceName',
        'managerUserName'    => 'ManagerUserName',
        'regionId'           => 'RegionId',
        'remoteDatabase'     => 'RemoteDatabase',
        'remoteInstanceName' => 'RemoteInstanceName',
        'status'             => 'Status',
        'userName'           => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->localDatabase) {
            $res['LocalDatabase'] = $this->localDatabase;
        }
        if (null !== $this->localInstanceName) {
            $res['LocalInstanceName'] = $this->localInstanceName;
        }
        if (null !== $this->managerUserName) {
            $res['ManagerUserName'] = $this->managerUserName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteDatabase) {
            $res['RemoteDatabase'] = $this->remoteDatabase;
        }
        if (null !== $this->remoteInstanceName) {
            $res['RemoteInstanceName'] = $this->remoteInstanceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remoteDataSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LocalDatabase'])) {
            $model->localDatabase = $map['LocalDatabase'];
        }
        if (isset($map['LocalInstanceName'])) {
            $model->localInstanceName = $map['LocalInstanceName'];
        }
        if (isset($map['ManagerUserName'])) {
            $model->managerUserName = $map['ManagerUserName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteDatabase'])) {
            $model->remoteDatabase = $map['RemoteDatabase'];
        }
        if (isset($map['RemoteInstanceName'])) {
            $model->remoteInstanceName = $map['RemoteInstanceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
