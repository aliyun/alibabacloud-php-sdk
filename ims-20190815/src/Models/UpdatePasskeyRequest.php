<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdatePasskeyRequest extends Model
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
     * @description The name of the passkey.
     *
     * @example device1
     *
     * @var string
     */
    public $passkeyName;

    /**
     * @description The logon name of the Resource Access Management (RAM) user.
     *
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'passkeyId'         => 'PasskeyId',
        'passkeyName'       => 'PasskeyName',
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
        if (null !== $this->passkeyName) {
            $res['PasskeyName'] = $this->passkeyName;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePasskeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasskeyId'])) {
            $model->passkeyId = $map['PasskeyId'];
        }
        if (isset($map['PasskeyName'])) {
            $model->passkeyName = $map['PasskeyName'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
