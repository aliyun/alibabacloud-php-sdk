<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorAccountRequest extends Model
{
    /**
     * @description The account IDs of members in the resource directory.
     *
     * >  You can call the [ListAccountsInResourceDirectory](~~ListAccountsInResourceDirectory~~) operation to obtain the account IDs. Separate multiple account IDs with commas (,). If you specify a value for this parameter, the existing list of members is replaced by the new list that you specify. Otherwise, the existing list is cleared.
     *
     * @example 1026780160******,1457515594******
     *
     * @var string
     */
    public $accountIds;
    protected $_name = [
        'accountIds' => 'AccountIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIds = $map['AccountIds'];
        }

        return $model;
    }
}
