<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListUsersRequest extends Model
{
    /**
     * @description The display name of the user that you want to query. Only exact match is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the bastion host whose users you want to query.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mobile phone number of the user that you want to query. Only exact match is supported.
     *
     * @example 1359999****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\\
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host whose users you want to query.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the user that you want to query. Valid values:
     *
     *   **Local**: a local user.
     *   **Ram**: a Resource Access Management (RAM) user.
     *   **AD**: an Active Directory (AD)-authenticated user.
     *   **LDAP**: a Lightweight Directory Access Protocol (LDAP)-authenticated user.
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The unique ID of the user that you want to query. Only exact match is supported.
     *
     * >  This parameter uniquely identifies a RAM user of the bastion host. This parameter is valid if **Source** is set to **Ram**. You can call the [ListUsers](https://help.aliyun.com/document_detail/28684.html) operation in RAM to obtain the unique ID of the user from the **UserId** response parameter.
     * @example 122748924538****
     *
     * @var string
     */
    public $sourceUserId;

    /**
     * @description The ID of the user group to which the user you want to query belongs.
     *
     * >  You can call the [ListUserGroups](https://help.aliyun.com/document_detail/204509.html) operation to query the user group ID.
     * @example 1
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description The logon name of the user that you want to query. Only exact match is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $userName;

    /**
     * @description The state of the user that you want to query. Valid values:
     *
     *   **Normal**: The user is in normal state.
     *   **Frozen**: The user is locked.
     *   **Expired**: The user has expired.
     *
     * @example Normal
     *
     * @var string
     */
    public $userState;
    protected $_name = [
        'displayName'  => 'DisplayName',
        'instanceId'   => 'InstanceId',
        'mobile'       => 'Mobile',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
        'source'       => 'Source',
        'sourceUserId' => 'SourceUserId',
        'userGroupId'  => 'UserGroupId',
        'userName'     => 'UserName',
        'userState'    => 'UserState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userState) {
            $res['UserState'] = $this->userState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserState'])) {
            $model->userState = $map['UserState'];
        }

        return $model;
    }
}
