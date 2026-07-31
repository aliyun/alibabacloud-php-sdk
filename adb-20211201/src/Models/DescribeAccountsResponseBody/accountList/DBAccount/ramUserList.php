<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount;

use AlibabaCloud\Dara\Model;

class ramUserList extends Model
{
    /**
     * @var string[]
     */
    public $ramUserList;
    protected $_name = [
        'ramUserList' => 'RamUserList',
    ];

    public function validate()
    {
        if (\is_array($this->ramUserList)) {
            Model::validateArray($this->ramUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ramUserList) {
            if (\is_array($this->ramUserList)) {
                $res['RamUserList'] = [];
                $n1 = 0;
                foreach ($this->ramUserList as $item1) {
                    $res['RamUserList'][$n1] = $item1;
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
        if (isset($map['RamUserList'])) {
            if (!empty($map['RamUserList'])) {
                $model->ramUserList = [];
                $n1 = 0;
                foreach ($map['RamUserList'] as $item1) {
                    $model->ramUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
