<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class DeletePasskeyRequest extends Model
{
    /**
     * @description The ID of the passkey.
     *
     * @example PASSKEY-CuZjEHhWcr7GIQOMGvkS
     *
     * @var string
     */
    public $passkeyId;

    /**
     * @description The logon name of the RAM user.
     *
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'passkeyId'         => 'PasskeyId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passkeyId) {
            $res['PasskeyId'] = $this->passkeyId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePasskeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasskeyId'])) {
            $model->passkeyId = $map['PasskeyId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
