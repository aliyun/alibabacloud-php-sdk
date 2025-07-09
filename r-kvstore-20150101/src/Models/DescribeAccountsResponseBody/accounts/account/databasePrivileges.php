<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponseBody\accounts\account;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponseBody\accounts\account\databasePrivileges\databasePrivilege;

class databasePrivileges extends Model
{
    /**
     * @var databasePrivilege[]
     */
    public $databasePrivilege;
    protected $_name = [
        'databasePrivilege' => 'DatabasePrivilege',
    ];

    public function validate()
    {
        if (\is_array($this->databasePrivilege)) {
            Model::validateArray($this->databasePrivilege);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databasePrivilege) {
            if (\is_array($this->databasePrivilege)) {
                $res['DatabasePrivilege'] = [];
                $n1 = 0;
                foreach ($this->databasePrivilege as $item1) {
                    $res['DatabasePrivilege'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DatabasePrivilege'])) {
            if (!empty($map['DatabasePrivilege'])) {
                $model->databasePrivilege = [];
                $n1 = 0;
                foreach ($map['DatabasePrivilege'] as $item1) {
                    $model->databasePrivilege[$n1] = databasePrivilege::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
