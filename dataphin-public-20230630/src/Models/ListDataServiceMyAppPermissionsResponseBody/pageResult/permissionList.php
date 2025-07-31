<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyAppPermissionsResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyAppPermissionsResponseBody\pageResult\permissionList\remarkForDebugList;
use AlibabaCloud\Tea\Model;

class permissionList extends Model
{
    /**
     * @description AppId
     *
     * @example 1021
     *
     * @var int
     */
    public $appId;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @example test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 1121
     *
     * @var string
     */
    public $creator;

    /**
     * @example NormalUser
     *
     * @var string
     */
    public $currentUserRole;

    /**
     * @example 1121
     *
     * @var string
     */
    public $owner;

    /**
     * @example test
     *
     * @var string
     */
    public $ownerUserName;

    /**
     * @example 1121
     *
     * @var string
     */
    public $privilegeBelongTo;

    /**
     * @example 0
     *
     * @var int
     */
    public $privilegeFrom;

    /**
     * @example 112101
     *
     * @var int
     */
    public $projectId;

    /**
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @var remarkForDebugList[]
     */
    public $remarkForDebugList;

    /**
     * @example 0
     *
     * @var int
     */
    public $role;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'createUserName' => 'CreateUserName',
        'creator' => 'Creator',
        'currentUserRole' => 'CurrentUserRole',
        'owner' => 'Owner',
        'ownerUserName' => 'OwnerUserName',
        'privilegeBelongTo' => 'PrivilegeBelongTo',
        'privilegeFrom' => 'PrivilegeFrom',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'remarkForDebugList' => 'RemarkForDebugList',
        'role' => 'Role',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->currentUserRole) {
            $res['CurrentUserRole'] = $this->currentUserRole;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerUserName) {
            $res['OwnerUserName'] = $this->ownerUserName;
        }
        if (null !== $this->privilegeBelongTo) {
            $res['PrivilegeBelongTo'] = $this->privilegeBelongTo;
        }
        if (null !== $this->privilegeFrom) {
            $res['PrivilegeFrom'] = $this->privilegeFrom;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->remarkForDebugList) {
            $res['RemarkForDebugList'] = [];
            if (null !== $this->remarkForDebugList && \is_array($this->remarkForDebugList)) {
                $n = 0;
                foreach ($this->remarkForDebugList as $item) {
                    $res['RemarkForDebugList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CurrentUserRole'])) {
            $model->currentUserRole = $map['CurrentUserRole'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerUserName'])) {
            $model->ownerUserName = $map['OwnerUserName'];
        }
        if (isset($map['PrivilegeBelongTo'])) {
            $model->privilegeBelongTo = $map['PrivilegeBelongTo'];
        }
        if (isset($map['PrivilegeFrom'])) {
            $model->privilegeFrom = $map['PrivilegeFrom'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RemarkForDebugList'])) {
            if (!empty($map['RemarkForDebugList'])) {
                $model->remarkForDebugList = [];
                $n = 0;
                foreach ($map['RemarkForDebugList'] as $item) {
                    $model->remarkForDebugList[$n++] = null !== $item ? remarkForDebugList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
