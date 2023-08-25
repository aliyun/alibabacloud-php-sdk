<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBAccount) {
            $res['DBAccount'] = [];
            if (null !== $this->DBAccount && \is_array($this->DBAccount)) {
                $n = 0;
                foreach ($this->DBAccount as $item) {
                    $res['DBAccount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBAccount'])) {
            if (!empty($map['DBAccount'])) {
                $model->DBAccount = [];
                $n                = 0;
                foreach ($map['DBAccount'] as $item) {
                    $model->DBAccount[$n++] = null !== $item ? DBAccount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
