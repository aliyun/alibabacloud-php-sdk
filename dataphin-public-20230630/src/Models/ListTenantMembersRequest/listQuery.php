<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $roleList;

    /**
     * @var string
     */
    public $searchText;

    /**
     * @var string[]
     */
    public $userGroupIdList;
    protected $_name = [
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'roleList' => 'RoleList',
        'searchText' => 'SearchText',
        'userGroupIdList' => 'UserGroupIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->roleList) {
            $res['RoleList'] = $this->roleList;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }
        if (null !== $this->userGroupIdList) {
            $res['UserGroupIdList'] = $this->userGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = $map['RoleList'];
            }
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }
        if (isset($map['UserGroupIdList'])) {
            if (!empty($map['UserGroupIdList'])) {
                $model->userGroupIdList = $map['UserGroupIdList'];
            }
        }

        return $model;
    }
}
