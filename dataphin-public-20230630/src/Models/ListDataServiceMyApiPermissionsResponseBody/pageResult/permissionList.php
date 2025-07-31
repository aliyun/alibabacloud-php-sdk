<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyApiPermissionsResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class permissionList extends Model
{
    /**
     * @example 1322
     *
     * @var int
     */
    public $apiId;

    /**
     * @example teset
     *
     * @var string
     */
    public $apiName;

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
     * @example 0
     *
     * @var int
     */
    public $role;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'createUserName' => 'CreateUserName',
        'creator' => 'Creator',
        'owner' => 'Owner',
        'ownerUserName' => 'OwnerUserName',
        'privilegeBelongTo' => 'PrivilegeBelongTo',
        'privilegeFrom' => 'PrivilegeFrom',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'role' => 'Role',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
