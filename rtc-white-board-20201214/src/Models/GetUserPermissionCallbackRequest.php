<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class GetUserPermissionCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $docKey;

    /**
     * @var string
     */
    public $permissionType;
    protected $_name = [
        'userId'         => 'UserId',
        'docKey'         => 'DocKey',
        'permissionType' => 'PermissionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }
        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserPermissionCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }
        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }

        return $model;
    }
}
