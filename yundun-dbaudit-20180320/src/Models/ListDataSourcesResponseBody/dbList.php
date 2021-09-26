<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dbUsername;

    /**
     * @var string
     */
    public $dbCertificate;

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
    public $dbVersion;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $dbType;

    /**
     * @var int
     */
    public $auditSwitch;

    /**
     * @var string
     */
    public $dbTypeName;

    /**
     * @var string
     */
    public $dbVersionName;

    /**
     * @var string[]
     */
    public $dbAddresses;
    protected $_name = [
        'dbId'          => 'DbId',
        'createTime'    => 'CreateTime',
        'dbUsername'    => 'DbUsername',
        'dbCertificate' => 'DbCertificate',
        'dbInstanceId'  => 'DbInstanceId',
        'assetType'     => 'AssetType',
        'dbVersion'     => 'DbVersion',
        'dbName'        => 'DbName',
        'dbType'        => 'DbType',
        'auditSwitch'   => 'AuditSwitch',
        'dbTypeName'    => 'DbTypeName',
        'dbVersionName' => 'DbVersionName',
        'dbAddresses'   => 'DbAddresses',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dbUsername) {
            $res['DbUsername'] = $this->dbUsername;
        }
        if (null !== $this->dbCertificate) {
            $res['DbCertificate'] = $this->dbCertificate;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->auditSwitch) {
            $res['AuditSwitch'] = $this->auditSwitch;
        }
        if (null !== $this->dbTypeName) {
            $res['DbTypeName'] = $this->dbTypeName;
        }
        if (null !== $this->dbVersionName) {
            $res['DbVersionName'] = $this->dbVersionName;
        }
        if (null !== $this->dbAddresses) {
            $res['DbAddresses'] = $this->dbAddresses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DbUsername'])) {
            $model->dbUsername = $map['DbUsername'];
        }
        if (isset($map['DbCertificate'])) {
            $model->dbCertificate = $map['DbCertificate'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['AuditSwitch'])) {
            $model->auditSwitch = $map['AuditSwitch'];
        }
        if (isset($map['DbTypeName'])) {
            $model->dbTypeName = $map['DbTypeName'];
        }
        if (isset($map['DbVersionName'])) {
            $model->dbVersionName = $map['DbVersionName'];
        }
        if (isset($map['DbAddresses'])) {
            if (!empty($map['DbAddresses'])) {
                $model->dbAddresses = $map['DbAddresses'];
            }
        }

        return $model;
    }
}
