<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var int
     */
    public $assetType;

    /**
     * @var int
     */
    public $dbType;

    /**
     * @var int
     */
    public $dbVersion;

    /**
     * @var string
     */
    public $dbCertificate;

    /**
     * @var string
     */
    public $dbUsername;

    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var string[]
     */
    public $dbAddresses;
    protected $_name = [
        'regionId'      => 'RegionId',
        'instanceId'    => 'InstanceId',
        'dbName'        => 'DbName',
        'dbInstanceId'  => 'DbInstanceId',
        'assetType'     => 'AssetType',
        'dbType'        => 'DbType',
        'dbVersion'     => 'DbVersion',
        'dbCertificate' => 'DbCertificate',
        'dbUsername'    => 'DbUsername',
        'dbPassword'    => 'DbPassword',
        'dbAddresses'   => 'DbAddresses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }
        if (null !== $this->dbCertificate) {
            $res['DbCertificate'] = $this->dbCertificate;
        }
        if (null !== $this->dbUsername) {
            $res['DbUsername'] = $this->dbUsername;
        }
        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }
        if (null !== $this->dbAddresses) {
            $res['DbAddresses'] = $this->dbAddresses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }
        if (isset($map['DbCertificate'])) {
            $model->dbCertificate = $map['DbCertificate'];
        }
        if (isset($map['DbUsername'])) {
            $model->dbUsername = $map['DbUsername'];
        }
        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }
        if (isset($map['DbAddresses'])) {
            if (!empty($map['DbAddresses'])) {
                $model->dbAddresses = $map['DbAddresses'];
            }
        }

        return $model;
    }
}
