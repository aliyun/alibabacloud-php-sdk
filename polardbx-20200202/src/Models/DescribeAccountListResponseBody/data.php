<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeAccountListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example testaccount desc
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @example testAccount
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
     * @example 0
     *
     * @var string
     */
    public $accountType;

    /**
     * @example pxc-*********
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @example 2012-06-08T15:00Z
     *
     * @var string
     */
    public $gmtCreated;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountPrivilege'   => 'AccountPrivilege',
        'accountType'        => 'AccountType',
        'DBInstanceName'     => 'DBInstanceName',
        'DBName'             => 'DBName',
        'gmtCreated'         => 'GmtCreated',
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
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        return $model;
    }
}
