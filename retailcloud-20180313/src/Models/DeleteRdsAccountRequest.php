<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DeleteRdsAccountRequest extends Model
{
    /**
     * @example test1
     *
     * @var string
     */
    public $accountName;

    /**
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $dbInstanceId;
    protected $_name = [
        'accountName'  => 'AccountName',
        'dbInstanceId' => 'DbInstanceId',
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
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRdsAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        return $model;
    }
}
