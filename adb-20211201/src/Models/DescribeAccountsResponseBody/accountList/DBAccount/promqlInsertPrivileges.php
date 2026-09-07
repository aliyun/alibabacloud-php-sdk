<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount;

use AlibabaCloud\Dara\Model;

class promqlInsertPrivileges extends Model
{
    /**
     * @var string[]
     */
    public $promqlInsertPrivileges;
    protected $_name = [
        'promqlInsertPrivileges' => 'PromqlInsertPrivileges',
    ];

    public function validate()
    {
        if (\is_array($this->promqlInsertPrivileges)) {
            Model::validateArray($this->promqlInsertPrivileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promqlInsertPrivileges) {
            if (\is_array($this->promqlInsertPrivileges)) {
                $res['PromqlInsertPrivileges'] = [];
                $n1 = 0;
                foreach ($this->promqlInsertPrivileges as $item1) {
                    $res['PromqlInsertPrivileges'][$n1] = $item1;
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
        if (isset($map['PromqlInsertPrivileges'])) {
            if (!empty($map['PromqlInsertPrivileges'])) {
                $model->promqlInsertPrivileges = [];
                $n1 = 0;
                foreach ($map['PromqlInsertPrivileges'] as $item1) {
                    $model->promqlInsertPrivileges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
