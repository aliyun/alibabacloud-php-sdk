<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\BatchEnrollAccountsRequest;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @example 12868156179****
     *
     * @var int
     */
    public $accountUid;
    protected $_name = [
        'accountUid' => 'AccountUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }

        return $model;
    }
}
