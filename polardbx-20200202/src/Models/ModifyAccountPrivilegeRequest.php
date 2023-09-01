<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountPrivilegeRequest extends Model
{
    /**
     * @example account_sec
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
     * @example pxc-htri0ori2r4k9p
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example sbtest
     *
     * @var string
     */
    public $dbName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example account_audit
     *
     * @var string
     */
    public $securityAccountName;

    /**
     * @example *****
     *
     * @var string
     */
    public $securityAccountPassword;
    protected $_name = [
        'accountName'             => 'AccountName',
        'accountPrivilege'        => 'AccountPrivilege',
        'DBInstanceName'          => 'DBInstanceName',
        'dbName'                  => 'DbName',
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
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
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
     * @return ModifyAccountPrivilegeRequest
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
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
