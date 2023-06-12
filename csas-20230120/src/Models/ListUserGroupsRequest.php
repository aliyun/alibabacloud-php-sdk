<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListUserGroupsRequest extends Model
{
    /**
     * @example username
     *
     * @var string
     */
    public $attributeValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description 用户组名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
     *
     * @example user_group_name
     *
     * @var string
     */
    public $name;

    /**
     * @example pa-policy-54a7838a48bf****
     *
     * @var string
     */
    public $PAPolicyId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $userGroupIds;
    protected $_name = [
        'attributeValue' => 'AttributeValue',
        'currentPage'    => 'CurrentPage',
        'name'           => 'Name',
        'PAPolicyId'     => 'PAPolicyId',
        'pageSize'       => 'PageSize',
        'userGroupIds'   => 'UserGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = $this->attributeValue;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->PAPolicyId) {
            $res['PAPolicyId'] = $this->PAPolicyId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PAPolicyId'])) {
            $model->PAPolicyId = $map['PAPolicyId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }

        return $model;
    }
}
