<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceAccountRequest\dbPrivilege;
use AlibabaCloud\Tea\Model;

class CreateInstanceAccountRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var dbPrivilege[]
     */
    public $dbPrivilege;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'accountName'    => 'AccountName',
        'password'       => 'Password',
        'dbPrivilege'    => 'DbPrivilege',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->dbPrivilege) {
            $res['DbPrivilege'] = [];
            if (null !== $this->dbPrivilege && \is_array($this->dbPrivilege)) {
                $n = 0;
                foreach ($this->dbPrivilege as $item) {
                    $res['DbPrivilege'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['DbPrivilege'])) {
            if (!empty($map['DbPrivilege'])) {
                $model->dbPrivilege = [];
                $n                  = 0;
                foreach ($map['DbPrivilege'] as $item) {
                    $model->dbPrivilege[$n++] = null !== $item ? dbPrivilege::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
