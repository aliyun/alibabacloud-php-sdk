<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListAppPoliciesForIdentityRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](https://help.aliyun.com/document_detail/113600.html).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the identity.
     *
     *   Specifies the ID of the RAM user when the IdentityType parameter is set to RamUser.
     *   Specifies the name of the RAM role when the IdentityType parameter is set to RamRole.
     *
     * @example test****name
     *
     * @var string
     */
    public $identityName;

    /**
     * @description The type of the identity. Valid values:
     *
     *   **RamUser**: a RAM user.
     *   **RamRole**: a RAM role.
     *
     * @example RamUser
     *
     * @var string
     */
    public $identityType;
    protected $_name = [
        'appId'        => 'AppId',
        'identityName' => 'IdentityName',
        'identityType' => 'IdentityType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppPoliciesForIdentityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }

        return $model;
    }
}
