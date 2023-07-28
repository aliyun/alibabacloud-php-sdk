<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AttachAppPolicyToIdentityRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     * > This parameter is optional when the PolicyNames parameter is set to VODAppAdministratorAccess. This parameter is required when the PolicyNames parameter is set to other values.
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the identity.
     *   Specifies the ID of the RAM user when the IdentityType parameter is set to RamUser.
     *   Specifies the name of the RAM role when the IdentityType parameter is set to RamRole.
     *
     * @example ****
     *
     * @var string
     */
    public $identityName;

    /**
     * @description The type of the identity. Valid values:
     *   **RamUser**: a RAM user.
     *   **RamRole**: a RAM role.
     *
     * @example RamRole
     *
     * @var string
     */
    public $identityType;

    /**
     * @description The name of the policy. Only system policies are supported. Separate multiple policies with commas (,). Valid values:
     *   **VODAppFullAccess**: authorizes an identity to manage all resources in an application.
     *   **VODAppReadOnlyAccess**: authorizes an identity to access all resources in an application in read-only mode.
     *   **VODAppAdministratorAccess**: assigns the application administrator role to an identity.
     *
     * @example VODAppFullAccess
     *
     * @var string
     */
    public $policyNames;
    protected $_name = [
        'appId'        => 'AppId',
        'identityName' => 'IdentityName',
        'identityType' => 'IdentityType',
        'policyNames'  => 'PolicyNames',
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
        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachAppPolicyToIdentityRequest
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
        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }

        return $model;
    }
}
