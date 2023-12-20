<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GrantDbToAccountRequest extends Model
{
    /**
     * @example test
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
     * @example rm-ul9wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example testDB
     *
     * @var string
     */
    public $dbName;
    protected $_name = [
        'accountName'      => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
        'dbInstanceId'     => 'DbInstanceId',
        'dbName'           => 'DbName',
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
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantDbToAccountRequest
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
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        return $model;
    }
}
