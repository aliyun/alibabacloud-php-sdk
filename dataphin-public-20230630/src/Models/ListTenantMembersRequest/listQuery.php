<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
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

    public function validate()
    {
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        if (\is_array($this->userGroupIdList)) {
            Model::validateArray($this->userGroupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->roleList) {
            if (\is_array($this->roleList)) {
                $res['RoleList'] = [];
                $n1 = 0;
                foreach ($this->roleList as $item1) {
                    $res['RoleList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        if (null !== $this->userGroupIdList) {
            if (\is_array($this->userGroupIdList)) {
                $res['UserGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->userGroupIdList as $item1) {
                    $res['UserGroupIdList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = [];
                $n1 = 0;
                foreach ($map['RoleList'] as $item1) {
                    $model->roleList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        if (isset($map['UserGroupIdList'])) {
            if (!empty($map['UserGroupIdList'])) {
                $model->userGroupIdList = [];
                $n1 = 0;
                foreach ($map['UserGroupIdList'] as $item1) {
                    $model->userGroupIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
