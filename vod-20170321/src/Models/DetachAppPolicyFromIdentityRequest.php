<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DetachAppPolicyFromIdentityRequest extends Model
{
    /**
     * @description The ID of the application. This parameter is optional if you set PolicyNames to VODAppAdministratorAccess. This parameter is required if you set PolicyNames to a value other than VODAppAdministratorAccess.
     *
     *   Default value: **app-1000000**.
     *   For more information, see [Overview](https://help.aliyun.com/document_detail/113600.html).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the RAM user or the name of the RAM role.
     *
     *   Specifies the ID of the RAM user for this parameter if you set IdentityType to RamUser.
     *   Specifies the name of the RAM role for this parameter if you set IdentityType to RamRole.
     *
     * This parameter is required.
     * @example test****name
     *
     * @var string
     */
    public $identityName;

    /**
     * @description The type of the identity. Valid values:
     *
     *   **RamUser**: RAM user
     *   **RamRole**: RAM role
     *
     * This parameter is required.
     * @example RamUser
     *
     * @var string
     */
    public $identityType;

    /**
     * @description The name of the policy. Separate multiple names with commas (,). Only system policies are supported.
     *
     *   **VODAppFullAccess**: permissions to manage all resources in an application
     *   **VODAppReadOnlyAccess**: permissions to read all resources in an application
     *   **VODAppAdministratorAccess**: permissions of the application administrator
     *
     * This parameter is required.
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
     * @return DetachAppPolicyFromIdentityRequest
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
