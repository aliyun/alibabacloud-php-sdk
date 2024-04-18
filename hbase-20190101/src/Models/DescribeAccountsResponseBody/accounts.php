<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @var string[]
     */
    public $account;
    protected $_name = [
        'account' => 'account',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = $this->account;
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
        if (isset($map['account'])) {
            if (!empty($map['account'])) {
                $model->account = $map['account'];
            }
        }

        return $model;
    }
}
