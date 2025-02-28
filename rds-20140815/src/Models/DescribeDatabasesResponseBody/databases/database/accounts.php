<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\accounts\accountPrivilegeInfo;

class accounts extends Model
{
    /**
     * @var accountPrivilegeInfo[]
     */
    public $accountPrivilegeInfo;
    protected $_name = [
        'accountPrivilegeInfo' => 'AccountPrivilegeInfo',
    ];

    public function validate()
    {
        if (\is_array($this->accountPrivilegeInfo)) {
            Model::validateArray($this->accountPrivilegeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountPrivilegeInfo) {
            if (\is_array($this->accountPrivilegeInfo)) {
                $res['AccountPrivilegeInfo'] = [];
                $n1                          = 0;
                foreach ($this->accountPrivilegeInfo as $item1) {
                    $res['AccountPrivilegeInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountPrivilegeInfo'])) {
            if (!empty($map['AccountPrivilegeInfo'])) {
                $model->accountPrivilegeInfo = [];
                $n1                          = 0;
                foreach ($map['AccountPrivilegeInfo'] as $item1) {
                    $model->accountPrivilegeInfo[$n1++] = accountPrivilegeInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
