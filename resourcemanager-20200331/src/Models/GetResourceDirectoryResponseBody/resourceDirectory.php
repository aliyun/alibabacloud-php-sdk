<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDirectory extends Model
{
    /**
     * @var string
     */
    public $rootFolderId;

    /**
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $masterAccountId;

    /**
     * @var string
     */
    public $masterAccountName;

    /**
     * @var string
     */
    public $controlPolicyStatus;

    /**
     * @var string
     */
    public $memberDeletionStatus;
    protected $_name = [
        'rootFolderId'         => 'RootFolderId',
        'resourceDirectoryId'  => 'ResourceDirectoryId',
        'createTime'           => 'CreateTime',
        'masterAccountId'      => 'MasterAccountId',
        'masterAccountName'    => 'MasterAccountName',
        'controlPolicyStatus'  => 'ControlPolicyStatus',
        'memberDeletionStatus' => 'MemberDeletionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rootFolderId) {
            $res['RootFolderId'] = $this->rootFolderId;
        }
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->masterAccountId) {
            $res['MasterAccountId'] = $this->masterAccountId;
        }
        if (null !== $this->masterAccountName) {
            $res['MasterAccountName'] = $this->masterAccountName;
        }
        if (null !== $this->controlPolicyStatus) {
            $res['ControlPolicyStatus'] = $this->controlPolicyStatus;
        }
        if (null !== $this->memberDeletionStatus) {
            $res['MemberDeletionStatus'] = $this->memberDeletionStatus;
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
        if (isset($map['RootFolderId'])) {
            $model->rootFolderId = $map['RootFolderId'];
        }
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MasterAccountId'])) {
            $model->masterAccountId = $map['MasterAccountId'];
        }
        if (isset($map['MasterAccountName'])) {
            $model->masterAccountName = $map['MasterAccountName'];
        }
        if (isset($map['ControlPolicyStatus'])) {
            $model->controlPolicyStatus = $map['ControlPolicyStatus'];
        }
        if (isset($map['MemberDeletionStatus'])) {
            $model->memberDeletionStatus = $map['MemberDeletionStatus'];
        }

        return $model;
    }
}
