<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDirectory extends Model
{
    /**
     * @example Enabled
     *
     * @var string
     */
    public $controlPolicyStatus;

    /**
     * @example 2019-02-18T15:32:10.473Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $identityInformation;

    /**
     * @example 172845045600****
     *
     * @var string
     */
    public $masterAccountId;

    /**
     * @example aliyun-admin
     *
     * @var string
     */
    public $masterAccountName;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $memberDeletionStatus;

    /**
     * @example rd-St****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
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
