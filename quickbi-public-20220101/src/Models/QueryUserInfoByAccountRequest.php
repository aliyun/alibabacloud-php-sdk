<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryUserInfoByAccountRequest extends Model
{
    /**
     * @var string
     */
    public $account;
    protected $_name = [
        'account' => 'Account',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserInfoByAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        return $model;
    }
}
