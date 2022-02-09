<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases\database\accounts;

use AlibabaCloud\Tea\Model;

class account extends Model
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
    public $accountStatus;

    /**
     * @var string
     */
    public $privilegeStatus;
    protected $_name = [
        'accountName'      => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
        'accountStatus'    => 'AccountStatus',
        'privilegeStatus'  => 'PrivilegeStatus',
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
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->privilegeStatus) {
            $res['PrivilegeStatus'] = $this->privilegeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['PrivilegeStatus'])) {
            $model->privilegeStatus = $map['PrivilegeStatus'];
        }

        return $model;
    }
}
