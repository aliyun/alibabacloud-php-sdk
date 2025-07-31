<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAuthorizedAppsResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAuthorizedAppsResponseBody\pageResult\authorizedAppList\remarkForDebugList;
use AlibabaCloud\Tea\Model;

class authorizedAppList extends Model
{
    /**
     * @example 1022
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
     * @example 30012101
     *
     * @var string
     */
    public $applyUserId;

    /**
     * @var string
     */
    public $applyUserName;

    /**
     * @example 2025-06-30
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example 1121
     *
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isProjectManager;

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
     * @example 0
     *
     * @var int
     */
    public $privilegeAccount;

    /**
     * @example 1
     *
     * @var int
     */
    public $privilegeType;

    /**
     * @example 102122
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
     * @var bool
     */
    public $realHasOwnerPrivilege;

    /**
     * @var bool
     */
    public $realHasPrivilege;

    /**
     * @var remarkForDebugList[]
     */
    public $remarkForDebugList;

    /**
     * @var bool
     */
    public $revocable;

    /**
     * @example -1
     *
     * @var int
     */
    public $revocableDetail;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'applyUserId' => 'ApplyUserId',
        'applyUserName' => 'ApplyUserName',
        'expireDate' => 'ExpireDate',
        'id' => 'Id',
        'isProjectManager' => 'IsProjectManager',
        'owner' => 'Owner',
        'ownerUserName' => 'OwnerUserName',
        'privilegeAccount' => 'PrivilegeAccount',
        'privilegeType' => 'PrivilegeType',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'realHasOwnerPrivilege' => 'RealHasOwnerPrivilege',
        'realHasPrivilege' => 'RealHasPrivilege',
        'remarkForDebugList' => 'RemarkForDebugList',
        'revocable' => 'Revocable',
        'revocableDetail' => 'RevocableDetail',
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
        if (null !== $this->applyUserId) {
            $res['ApplyUserId'] = $this->applyUserId;
        }
        if (null !== $this->applyUserName) {
            $res['ApplyUserName'] = $this->applyUserName;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isProjectManager) {
            $res['IsProjectManager'] = $this->isProjectManager;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerUserName) {
            $res['OwnerUserName'] = $this->ownerUserName;
        }
        if (null !== $this->privilegeAccount) {
            $res['PrivilegeAccount'] = $this->privilegeAccount;
        }
        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->realHasOwnerPrivilege) {
            $res['RealHasOwnerPrivilege'] = $this->realHasOwnerPrivilege;
        }
        if (null !== $this->realHasPrivilege) {
            $res['RealHasPrivilege'] = $this->realHasPrivilege;
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
        if (null !== $this->revocable) {
            $res['Revocable'] = $this->revocable;
        }
        if (null !== $this->revocableDetail) {
            $res['RevocableDetail'] = $this->revocableDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedAppList
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
        if (isset($map['ApplyUserId'])) {
            $model->applyUserId = $map['ApplyUserId'];
        }
        if (isset($map['ApplyUserName'])) {
            $model->applyUserName = $map['ApplyUserName'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsProjectManager'])) {
            $model->isProjectManager = $map['IsProjectManager'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerUserName'])) {
            $model->ownerUserName = $map['OwnerUserName'];
        }
        if (isset($map['PrivilegeAccount'])) {
            $model->privilegeAccount = $map['PrivilegeAccount'];
        }
        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RealHasOwnerPrivilege'])) {
            $model->realHasOwnerPrivilege = $map['RealHasOwnerPrivilege'];
        }
        if (isset($map['RealHasPrivilege'])) {
            $model->realHasPrivilege = $map['RealHasPrivilege'];
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
        if (isset($map['Revocable'])) {
            $model->revocable = $map['Revocable'];
        }
        if (isset($map['RevocableDetail'])) {
            $model->revocableDetail = $map['RevocableDetail'];
        }

        return $model;
    }
}
