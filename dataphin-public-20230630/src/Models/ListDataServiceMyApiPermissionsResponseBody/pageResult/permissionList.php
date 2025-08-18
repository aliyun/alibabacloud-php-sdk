<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyApiPermissionsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;

class permissionList extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
