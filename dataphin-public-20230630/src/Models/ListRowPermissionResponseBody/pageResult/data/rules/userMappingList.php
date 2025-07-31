<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data\rules;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data\rules\userMappingList\accounts;
use AlibabaCloud\Tea\Model;

class userMappingList extends Model
{
    /**
     * @example PERSONAL
     *
     * @var string
     */
    public $accountType;

    /**
     * @var accounts[]
     */
    public $accounts;
    protected $_name = [
        'accountType' => 'AccountType',
        'accounts' => 'Accounts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accounts) {
            $res['Accounts'] = [];
            if (null !== $this->accounts && \is_array($this->accounts)) {
                $n = 0;
                foreach ($this->accounts as $item) {
                    $res['Accounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userMappingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n = 0;
                foreach ($map['Accounts'] as $item) {
                    $model->accounts[$n++] = null !== $item ? accounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
