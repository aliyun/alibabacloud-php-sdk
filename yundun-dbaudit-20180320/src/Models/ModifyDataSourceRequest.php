<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataSourceRequest extends Model
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
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbName;

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
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string[]
     */
    public $dbAddresses;
    protected $_name = [
        'regionId'      => 'RegionId',
        'instanceId'    => 'InstanceId',
        'dbId'          => 'DbId',
        'dbName'        => 'DbName',
        'dbVersion'     => 'DbVersion',
        'dbCertificate' => 'DbCertificate',
        'dbUsername'    => 'DbUsername',
        'dbPassword'    => 'DbPassword',
        'dbInstanceId'  => 'DbInstanceId',
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
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
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
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbAddresses) {
            $res['DbAddresses'] = $this->dbAddresses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataSourceRequest
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
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
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbAddresses'])) {
            if (!empty($map['DbAddresses'])) {
                $model->dbAddresses = $map['DbAddresses'];
            }
        }

        return $model;
    }
}
