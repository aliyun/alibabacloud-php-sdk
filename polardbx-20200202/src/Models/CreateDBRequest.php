<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class CreateDBRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $accountPrivilege;

    /**
     * @var string
     */
    public $dbDescription;

    /**
     * @var string
     */
    public $securityAccountName;

    /**
     * @var string
     */
    public $securityAccountPassword;
    protected $_name = [
        'regionId'                => 'RegionId',
        'DBInstanceName'          => 'DBInstanceName',
        'accountName'             => 'AccountName',
        'charset'                 => 'Charset',
        'dbName'                  => 'DbName',
        'accountPrivilege'        => 'AccountPrivilege',
        'dbDescription'           => 'DbDescription',
        'securityAccountName'     => 'SecurityAccountName',
        'securityAccountPassword' => 'SecurityAccountPassword',
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
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->dbDescription) {
            $res['DbDescription'] = $this->dbDescription;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['DbDescription'])) {
            $model->dbDescription = $map['DbDescription'];
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
