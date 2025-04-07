<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpdateSharedAccountPermissionRequest extends Model
{
    /**
     * @description Client token, used to ensure the idempotence of requests. Generate a unique value for this parameter from your client to ensure it is unique across different requests. ClientToken supports only ASCII characters.
     *
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Permission type. Possible values:
     * - Deployable: Can be deployed.
     * - Accessible: Can be accessed.
     * - AccessibleIncludeBeta: Can access all versions, including Beta versions.
     * - DeployableIncludeBeta: Can deploy all versions, including Beta versions.
     * - Authorized: Authorized (for reselling scenarios)
     * - Unauthorized: Unauthorized (for reselling scenarios)
     *
     * This parameter is required.
     *
     * @example Deployable
     *
     * @var string
     */
    public $permission;

    /**
     * @description Region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Service ID.
     *
     * This parameter is required.
     *
     * @example service-0d6e1d846e4c4axxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Service sharing type, with a default value of SharedAccount. Available options:
     *
     * - SharedAccount: Regular sharing type.
     *
     * - Reseller: Reselling sharing type.
     *
     * @example SharedAccount
     *
     * @var string
     */
    public $type;

    /**
     * @description Whitelist account for service sharing.
     *
     * This parameter is required.
     *
     * @example 1563457855xxxxxx
     *
     * @var int
     */
    public $userAliUid;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'permission' => 'Permission',
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'type' => 'Type',
        'userAliUid' => 'UserAliUid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userAliUid) {
            $res['UserAliUid'] = $this->userAliUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSharedAccountPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserAliUid'])) {
            $model->userAliUid = $map['UserAliUid'];
        }

        return $model;
    }
}
