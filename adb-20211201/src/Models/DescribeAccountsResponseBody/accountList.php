<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount;

class accountList extends Model
{
    /**
     * @var DBAccount[]
     */
    public $DBAccount;
    protected $_name = [
        'DBAccount' => 'DBAccount',
    ];

    public function validate()
    {
        if (\is_array($this->DBAccount)) {
            Model::validateArray($this->DBAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBAccount) {
            if (\is_array($this->DBAccount)) {
                $res['DBAccount'] = [];
                $n1               = 0;
                foreach ($this->DBAccount as $item1) {
                    $res['DBAccount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBAccount'])) {
            if (!empty($map['DBAccount'])) {
                $model->DBAccount = [];
                $n1               = 0;
                foreach ($map['DBAccount'] as $item1) {
                    $model->DBAccount[$n1++] = DBAccount::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
