<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourcesResponseBody;

use AlibabaCloud\Dara\Model;

class dbList extends Model
{
    /**
     * @var int
     */
    public $assetType;

    /**
     * @var int
     */
    public $auditSwitch;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $dbAddresses;

    /**
     * @var string
     */
    public $dbCertificate;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $dbType;

    /**
     * @var string
     */
    public $dbTypeName;

    /**
     * @var string
     */
    public $dbUsername;

    /**
     * @var int
     */
    public $dbVersion;

    /**
     * @var string
     */
    public $dbVersionName;
    protected $_name = [
        'assetType' => 'AssetType',
        'auditSwitch' => 'AuditSwitch',
        'createTime' => 'CreateTime',
        'dbAddresses' => 'DbAddresses',
        'dbCertificate' => 'DbCertificate',
        'dbId' => 'DbId',
        'dbInstanceId' => 'DbInstanceId',
        'dbName' => 'DbName',
        'dbType' => 'DbType',
        'dbTypeName' => 'DbTypeName',
        'dbUsername' => 'DbUsername',
        'dbVersion' => 'DbVersion',
        'dbVersionName' => 'DbVersionName',
    ];

    public function validate()
    {
        if (\is_array($this->dbAddresses)) {
            Model::validateArray($this->dbAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->auditSwitch) {
            $res['AuditSwitch'] = $this->auditSwitch;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dbAddresses) {
            if (\is_array($this->dbAddresses)) {
                $res['DbAddresses'] = [];
                $n1 = 0;
                foreach ($this->dbAddresses as $item1) {
                    $res['DbAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dbCertificate) {
            $res['DbCertificate'] = $this->dbCertificate;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->dbTypeName) {
            $res['DbTypeName'] = $this->dbTypeName;
        }

        if (null !== $this->dbUsername) {
            $res['DbUsername'] = $this->dbUsername;
        }

        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }

        if (null !== $this->dbVersionName) {
            $res['DbVersionName'] = $this->dbVersionName;
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['AuditSwitch'])) {
            $model->auditSwitch = $map['AuditSwitch'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DbAddresses'])) {
            if (!empty($map['DbAddresses'])) {
                $model->dbAddresses = [];
                $n1 = 0;
                foreach ($map['DbAddresses'] as $item1) {
                    $model->dbAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DbCertificate'])) {
            $model->dbCertificate = $map['DbCertificate'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['DbTypeName'])) {
            $model->dbTypeName = $map['DbTypeName'];
        }

        if (isset($map['DbUsername'])) {
            $model->dbUsername = $map['DbUsername'];
        }

        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }

        if (isset($map['DbVersionName'])) {
            $model->dbVersionName = $map['DbVersionName'];
        }

        return $model;
    }
}
