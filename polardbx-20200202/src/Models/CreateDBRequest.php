<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreateDBRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountPrivilege;

    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $dbDescription;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityAccountName;

    /**
     * @var string
     */
    public $securityAccountPassword;

    /**
     * @var string
     */
    public $storagePoolName;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
        'charset' => 'Charset',
        'DBInstanceName' => 'DBInstanceName',
        'dbDescription' => 'DbDescription',
        'dbName' => 'DbName',
        'mode' => 'Mode',
        'regionId' => 'RegionId',
        'securityAccountName' => 'SecurityAccountName',
        'securityAccountPassword' => 'SecurityAccountPassword',
        'storagePoolName' => 'StoragePoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }

        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->dbDescription) {
            $res['DbDescription'] = $this->dbDescription;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityAccountName) {
            $res['SecurityAccountName'] = $this->securityAccountName;
        }

        if (null !== $this->securityAccountPassword) {
            $res['SecurityAccountPassword'] = $this->securityAccountPassword;
        }

        if (null !== $this->storagePoolName) {
            $res['StoragePoolName'] = $this->storagePoolName;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }

        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DbDescription'])) {
            $model->dbDescription = $map['DbDescription'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityAccountName'])) {
            $model->securityAccountName = $map['SecurityAccountName'];
        }

        if (isset($map['SecurityAccountPassword'])) {
            $model->securityAccountPassword = $map['SecurityAccountPassword'];
        }

        if (isset($map['StoragePoolName'])) {
            $model->storagePoolName = $map['StoragePoolName'];
        }

        return $model;
    }
}
