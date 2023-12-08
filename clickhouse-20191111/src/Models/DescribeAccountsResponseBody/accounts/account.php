<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @example Creating
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @example Super
     *
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $configType;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'accountType'        => 'AccountType',
        'configType'         => 'ConfigType',
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
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
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
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        return $model;
    }
}
