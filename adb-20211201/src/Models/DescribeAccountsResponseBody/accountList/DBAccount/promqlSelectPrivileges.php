<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount;

use AlibabaCloud\Dara\Model;

class promqlSelectPrivileges extends Model
{
    /**
     * @var string[]
     */
    public $promqlSelectPrivileges;
    protected $_name = [
        'promqlSelectPrivileges' => 'PromqlSelectPrivileges',
    ];

    public function validate()
    {
        if (\is_array($this->promqlSelectPrivileges)) {
            Model::validateArray($this->promqlSelectPrivileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promqlSelectPrivileges) {
            if (\is_array($this->promqlSelectPrivileges)) {
                $res['PromqlSelectPrivileges'] = [];
                $n1 = 0;
                foreach ($this->promqlSelectPrivileges as $item1) {
                    $res['PromqlSelectPrivileges'][$n1] = $item1;
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
        if (isset($map['PromqlSelectPrivileges'])) {
            if (!empty($map['PromqlSelectPrivileges'])) {
                $model->promqlSelectPrivileges = [];
                $n1 = 0;
                foreach ($map['PromqlSelectPrivileges'] as $item1) {
                    $model->promqlSelectPrivileges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
