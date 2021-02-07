<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetUserRequest extends Model
{
    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'userPrincipalName' => 'UserPrincipalName',
        'userId'            => 'UserId',
        'userAccessKeyId'   => 'UserAccessKeyId',
        'akProxySuffix'     => 'AkProxySuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
