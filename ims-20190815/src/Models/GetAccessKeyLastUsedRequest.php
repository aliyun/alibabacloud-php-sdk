<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedRequest extends Model
{
    /**
     * @description The ID of the AccessKey pair that you want to query.
     *
     * This parameter is required.
     *
     * @example LTAI*******************
     *
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @description The logon name of the RAM user.
     *
     * If you do not specify this parameter, the AccessKey pair of the current user is queried.
     *
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'userAccessKeyId' => 'UserAccessKeyId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
