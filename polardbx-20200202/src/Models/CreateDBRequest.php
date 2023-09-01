<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class CreateDBRequest extends Model
{
    /**
     * @example testaccount
     *
     * @var string
     */
    public $accountName;

    /**
     * @example ReadWrite
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @example pxc-**************
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example db for test
     *
     * @var string
     */
    public $dbDescription;

    /**
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @example auto
     *
     * @var string
     */
    public $mode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example securityAccount
     *
     * @var string
     */
    public $securityAccountName;

    /**
     * @example securityPassword
     *
     * @var string
     */
    public $securityAccountPassword;
    protected $_name = [
        'accountName'             => 'AccountName',
        'accountPrivilege'        => 'AccountPrivilege',
        'charset'                 => 'Charset',
        'DBInstanceName'          => 'DBInstanceName',
        'dbDescription'           => 'DbDescription',
        'dbName'                  => 'DbName',
        'mode'                    => 'Mode',
        'regionId'                => 'RegionId',
        'securityAccountName'     => 'SecurityAccountName',
        'securityAccountPassword' => 'SecurityAccountPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBRequest
     */
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

        return $model;
    }
}
