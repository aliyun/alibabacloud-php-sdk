<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListUsersRequest extends Model
{
    /**
     * @description The display name of the user to be queried. Only exact match is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the Bastionhost instance to which the users to be queried belong.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the Bastionhost instance.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mobile number of the user to be queried. Only exact match is supported.
     *
     * @example 1359999****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the Bastionhost instance to which the users to be queried belong.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source of the user to be queried. Valid values:
     *
     *   **Local**: a local user
     *   **Ram**: a RAM user
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The unique ID of the user to be queried. Only exact match is supported.
     *
     * >  This parameter uniquely identifies a RAM user of the Bastionhost instance. This parameter takes effect only when the **Source** parameter is set to **Ram**. You can call the [ListUsers](~~28684~~) operation to obtain the unique ID of the user from the **UserId** response parameter.
     * @example 122748924538****
     *
     * @var string
     */
    public $sourceUserId;

    /**
     * @description The ID of the user group to be queried.
     *
     * >  You can call the [ListUserGroups](~~204509~~) operation to query the ID of the user group.
     * @example 1
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description The logon name of the user to be queried. Only exact match is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $userName;

    /**
     * @description The status of the user to be queried. Valid values:
     *
     *   **Normal**: The user can access the Bastionhost instance.
     *   **Frozen**: The user is locked and cannot access the Bastionhost instance.
     *   **Expired**: The user has expired and cannot access the Bastionhost instance.
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
