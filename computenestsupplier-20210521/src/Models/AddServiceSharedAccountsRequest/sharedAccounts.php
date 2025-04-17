<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest;

use AlibabaCloud\Dara\Model;

class sharedAccounts extends Model
{
    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $userAliUid;
    protected $_name = [
        'permission' => 'Permission',
        'userAliUid' => 'UserAliUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        if (null !== $this->userAliUid) {
            $res['UserAliUid'] = $this->userAliUid;
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
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        if (isset($map['UserAliUid'])) {
            $model->userAliUid = $map['UserAliUid'];
        }

        return $model;
    }
}
