<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody\dataSourceItems;

use AlibabaCloud\Dara\Model;

class remoteDataSources extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $localDatabase;
    /**
     * @var string
     */
    public $localInstanceName;
    /**
     * @var string
     */
    public $managerUserName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $remoteDatabase;
    /**
     * @var string
     */
    public $remoteInstanceName;
    /**
     * @var string
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
