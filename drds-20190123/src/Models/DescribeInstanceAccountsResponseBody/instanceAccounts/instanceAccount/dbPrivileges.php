<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount\dbPrivileges\dbPrivilege;
use AlibabaCloud\Tea\Model;

class dbPrivileges extends Model
{
    /**
     * @var dbPrivilege[]
     */
    public $dbPrivilege;
    protected $_name = [
        'dbPrivilege' => 'DbPrivilege',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return dbPrivileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
