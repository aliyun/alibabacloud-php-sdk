<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionResponse;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @var string[]
     */
    public $account;
    protected $_name = [
        'account' => 'Account',
    ];

    public function validate()
    {
        Model::validateRequired('account', $this->account, true);
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
     * @return accounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            if (!empty($map['Account'])) {
                $model->account = $map['Account'];
            }
        }

        return $model;
    }
}
