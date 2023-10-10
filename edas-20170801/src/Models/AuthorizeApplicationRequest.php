<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can specify multiple IDs. Separate multiple IDs with semicolons (;). If you leave this parameter empty, the permissions on the application are revoked.
     *
     * @example 5fdf50e8-*****;696-******
     *
     * @var string
     */
    public $appIds;

    /**
     * @description The ID of the RAM user to be authorized. The value of the parameter is in the `sub-account name@primary account UID` format.
     *
     * @example test@133434434****
     *
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'appIds'       => 'AppIds',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
