<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateUserRequest\userAccountParamList;
use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunUserId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int[]
     */
    public $groupIdList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int[]
     */
    public $roleIdList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var userAccountParamList[]
     */
    public $userAccountParamList;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'aliyunUserId'         => 'AliyunUserId',
        'description'          => 'Description',
        'groupIdList'          => 'GroupIdList',
        'regionId'             => 'RegionId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleIdList'           => 'RoleIdList',
        'status'               => 'Status',
        'userAccountParamList' => 'UserAccountParamList',
        'userName'             => 'UserName',
        'userType'             => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUserId) {
            $res['AliyunUserId'] = $this->aliyunUserId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->roleIdList) {
            $res['RoleIdList'] = $this->roleIdList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userAccountParamList) {
            $res['UserAccountParamList'] = [];
            if (null !== $this->userAccountParamList && \is_array($this->userAccountParamList)) {
                $n = 0;
                foreach ($this->userAccountParamList as $item) {
                    $res['UserAccountParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUserId'])) {
            $model->aliyunUserId = $map['AliyunUserId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = $map['GroupIdList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RoleIdList'])) {
            if (!empty($map['RoleIdList'])) {
                $model->roleIdList = $map['RoleIdList'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserAccountParamList'])) {
            if (!empty($map['UserAccountParamList'])) {
                $model->userAccountParamList = [];
                $n                           = 0;
                foreach ($map['UserAccountParamList'] as $item) {
                    $model->userAccountParamList[$n++] = null !== $item ? userAccountParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
