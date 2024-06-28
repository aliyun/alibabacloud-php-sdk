<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest;

use AlibabaCloud\Tea\Model;

class sharedAccounts extends Model
{
    /**
     * @description The permissions on the service. Valid values:
     *
     *   Deployable: Permissions to deploy the service.
     *   Accessible: Permissions to access the service.
     *
     * This parameter is required.
     * @example Accessible
     *
     * @var string
     */
    public $permission;

    /**
     * @description The Alibaba Cloud account ID of the user.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var string
     */
    public $userAliUid;
    protected $_name = [
        'permission' => 'Permission',
        'userAliUid' => 'UserAliUid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sharedAccounts
     */
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
