<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectMembersResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class projectMemberList extends Model
{
    /**
     * @example 1702692675000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1721720955000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 12356
     *
     * @var int
     */
    public $id;

    /**
     * @example 101111
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example test
     *
     * @var string
     */
    public $lastModifierName;

    /**
     * @var int[]
     */
    public $roleIdList;

    /**
     * @example 101111
     *
     * @var string
     */
    public $userId;

    /**
     * @example 张三
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'lastModifierName' => 'LastModifierName',
        'roleIdList' => 'RoleIdList',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->lastModifierName) {
            $res['LastModifierName'] = $this->lastModifierName;
        }
        if (null !== $this->roleIdList) {
            $res['RoleIdList'] = $this->roleIdList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectMemberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['LastModifierName'])) {
            $model->lastModifierName = $map['LastModifierName'];
        }
        if (isset($map['RoleIdList'])) {
            if (!empty($map['RoleIdList'])) {
                $model->roleIdList = $map['RoleIdList'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
