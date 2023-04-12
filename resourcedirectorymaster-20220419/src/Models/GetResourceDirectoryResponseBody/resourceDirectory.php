<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetResourceDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDirectory extends Model
{
    /**
     * @description The status of the Control Policy feature. Valid values:
     *
     *   Enabled: The feature is enabled.
     *   PendingEnable: The feature is being enabled.
     *   Disabled: The feature is disabled.
     *   PendingDisable: The feature is being disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $controlPolicyStatus;

    /**
     * @description The time when the resource directory was enabled.
     *
     * @example 2019-02-18T15:32:10.473Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The real-name verification information.
     *
     * @example \*\*\* Co., Ltd.
     *
     * @var string
     */
    public $identityInformation;

    /**
     * @description The ID of the management account.
     *
     * @example 172845045600****
     *
     * @var string
     */
    public $masterAccountId;

    /**
     * @description The name of the management account.
     *
     * @example aliyun-admin
     *
     * @var string
     */
    public $masterAccountName;

    /**
     * @description The status of the member deletion feature. Valid values:
     *
     *   Enabled: The feature is enabled. You can call the [DeleteAccount](~~DeleteAccount~~) operation to delete members of the resource account type.
     *   Disabled: The feature is disabled. You cannot delete members of the resource account type.
     *
     * @example Enabled
     *
     * @var string
     */
    public $memberDeletionStatus;

    /**
     * @description The ID of the resource directory.
     *
     * @example rd-St****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @description The ID of the Root folder.
     *
     * @example r-Zo****
     *
     * @var string
     */
    public $rootFolderId;
    protected $_name = [
        'controlPolicyStatus'  => 'ControlPolicyStatus',
        'createTime'           => 'CreateTime',
        'identityInformation'  => 'IdentityInformation',
        'masterAccountId'      => 'MasterAccountId',
        'masterAccountName'    => 'MasterAccountName',
        'memberDeletionStatus' => 'MemberDeletionStatus',
        'resourceDirectoryId'  => 'ResourceDirectoryId',
        'rootFolderId'         => 'RootFolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlPolicyStatus) {
            $res['ControlPolicyStatus'] = $this->controlPolicyStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->identityInformation) {
            $res['IdentityInformation'] = $this->identityInformation;
        }
        if (null !== $this->masterAccountId) {
            $res['MasterAccountId'] = $this->masterAccountId;
        }
        if (null !== $this->masterAccountName) {
            $res['MasterAccountName'] = $this->masterAccountName;
        }
        if (null !== $this->memberDeletionStatus) {
            $res['MemberDeletionStatus'] = $this->memberDeletionStatus;
        }
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->rootFolderId) {
            $res['RootFolderId'] = $this->rootFolderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDirectory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlPolicyStatus'])) {
            $model->controlPolicyStatus = $map['ControlPolicyStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IdentityInformation'])) {
            $model->identityInformation = $map['IdentityInformation'];
        }
        if (isset($map['MasterAccountId'])) {
            $model->masterAccountId = $map['MasterAccountId'];
        }
        if (isset($map['MasterAccountName'])) {
            $model->masterAccountName = $map['MasterAccountName'];
        }
        if (isset($map['MemberDeletionStatus'])) {
            $model->memberDeletionStatus = $map['MemberDeletionStatus'];
        }
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['RootFolderId'])) {
            $model->rootFolderId = $map['RootFolderId'];
        }

        return $model;
    }
}
