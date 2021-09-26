<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountDetailRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $accountTypeId;
    protected $_name = [
        'lang'          => 'Lang',
        'userId'        => 'UserId',
        'accountTypeId' => 'AccountTypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->accountTypeId) {
            $res['AccountTypeId'] = $this->accountTypeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AccountTypeId'])) {
            $model->accountTypeId = $map['AccountTypeId'];
        }

        return $model;
    }
}
