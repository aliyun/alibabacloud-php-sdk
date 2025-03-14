<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListOrganizationRoleUsersRequest extends Model
{
    /**
     * @description Keyword for the nickname of the organization member.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Page number.
     *
     * - Default value is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description Number of items per page.
     * - Default value is 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Organization role ID, including predefined roles and custom roles:
     *
     * - Organization Administrator (predefined role): 111111111
     * - Permission Administrator (predefined role): 111111112
     * - Regular User (predefined role): 111111113
     * - Custom Role: The corresponding role ID for a custom role
     *
     * This parameter is required.
     *
     * @example 111111111
     *
     * @var int
     */
    public $roleId;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'roleId' => 'RoleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrganizationRoleUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
