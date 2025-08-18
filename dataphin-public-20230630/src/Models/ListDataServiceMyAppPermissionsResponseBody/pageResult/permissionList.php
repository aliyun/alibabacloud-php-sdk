<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyAppPermissionsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyAppPermissionsResponseBody\pageResult\permissionList\remarkForDebugList;

class permissionList extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $currentUserRole;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerUserName;

    /**
     * @var string
     */
    public $privilegeBelongTo;

    /**
     * @var int
     */
    public $privilegeFrom;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var remarkForDebugList[]
     */
    public $remarkForDebugList;

    /**
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

    public function validate()
    {
        if (\is_array($this->remarkForDebugList)) {
            Model::validateArray($this->remarkForDebugList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->remarkForDebugList)) {
                $res['RemarkForDebugList'] = [];
                $n1 = 0;
                foreach ($this->remarkForDebugList as $item1) {
                    $res['RemarkForDebugList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['RemarkForDebugList'] as $item1) {
                    $model->remarkForDebugList[$n1] = remarkForDebugList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
