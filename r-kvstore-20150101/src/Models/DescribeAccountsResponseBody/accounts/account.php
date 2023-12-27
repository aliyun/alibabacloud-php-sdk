<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponseBody\accounts\account\databasePrivileges;
use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description The description of the account.
     *
     * @example testdec
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the account.
     *
     * @example demoaccount
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The state of the account. Valid values:
     *
     *   **Unavailable**: The account is unavailable.
     *   **Available**: The account is available.
     *
     * @example Available
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The type of the account. Valid values:
     *
     *   **Normal**: standard account
     *   **Super**: super account
     *
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description Details about account permissions.
     *
     * @var databasePrivileges
     */
    public $databasePrivileges;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp10noxlhcoim2****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'accountType'        => 'AccountType',
        'databasePrivileges' => 'DatabasePrivileges',
        'instanceId'         => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->databasePrivileges) {
            $res['DatabasePrivileges'] = null !== $this->databasePrivileges ? $this->databasePrivileges->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DatabasePrivileges'])) {
            $model->databasePrivileges = databasePrivileges::fromMap($map['DatabasePrivileges']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
