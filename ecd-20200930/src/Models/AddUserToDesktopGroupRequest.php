<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AddUserToDesktopGroupRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure the idempotence of a request](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the cloud computer share.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The IDs of the cloud computer shares.
     *
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @description The IDs of the users to whom you want to grant permissions.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $simpleUserGroupId;

    /**
     * @var string
     */
    public $userGroupName;

    /**
     * @var string
     */
    public $userOuPath;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupIds' => 'DesktopGroupIds',
        'endUserIds' => 'EndUserIds',
        'regionId' => 'RegionId',
        'simpleUserGroupId' => 'SimpleUserGroupId',
        'userGroupName' => 'UserGroupName',
        'userOuPath' => 'UserOuPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupIds) {
            $res['DesktopGroupIds'] = $this->desktopGroupIds;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->simpleUserGroupId) {
            $res['SimpleUserGroupId'] = $this->simpleUserGroupId;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }
        if (null !== $this->userOuPath) {
            $res['UserOuPath'] = $this->userOuPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserToDesktopGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = $map['DesktopGroupIds'];
            }
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SimpleUserGroupId'])) {
            $model->simpleUserGroupId = $map['SimpleUserGroupId'];
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }
        if (isset($map['UserOuPath'])) {
            $model->userOuPath = $map['UserOuPath'];
        }

        return $model;
    }
}
