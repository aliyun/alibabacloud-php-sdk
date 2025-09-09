<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount\dbPrivileges\dbPrivilege;

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
        if (\is_array($this->dbPrivilege)) {
            Model::validateArray($this->dbPrivilege);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbPrivilege) {
            if (\is_array($this->dbPrivilege)) {
                $res['DbPrivilege'] = [];
                $n1 = 0;
                foreach ($this->dbPrivilege as $item1) {
                    $res['DbPrivilege'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbPrivilege'])) {
            if (!empty($map['DbPrivilege'])) {
                $model->dbPrivilege = [];
                $n1 = 0;
                foreach ($map['DbPrivilege'] as $item1) {
                    $model->dbPrivilege[$n1] = dbPrivilege::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
