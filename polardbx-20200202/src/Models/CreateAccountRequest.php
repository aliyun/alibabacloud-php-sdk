<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
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
    public $accountPassword;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $accountPrivilege;

    /**
     * @var string
     */
    public $accountDescription;

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
        'accountPassword'         => 'AccountPassword',
        'DBName'                  => 'DBName',
        'accountPrivilege'        => 'AccountPrivilege',
        'accountDescription'      => 'AccountDescription',
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
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
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
     * @return CreateAccountRequest
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
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
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
