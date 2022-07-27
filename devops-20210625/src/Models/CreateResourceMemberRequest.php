<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceMemberRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'accountId' => 'accountId',
        'roleName'  => 'roleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        return $model;
    }
}
