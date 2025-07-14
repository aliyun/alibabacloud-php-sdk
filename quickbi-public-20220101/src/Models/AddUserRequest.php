<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddUserRequest extends Model
{
    /**
     * @description Aliyun account ID.
     * >Warning: For versions of Quick BI released after December 31, 2024, AccountId will be a required parameter. Please modify your API before this date.
     *
     * <props="china">Published only on the China site
     *
     * @example 191476xxxxx23754
     *
     * @var string
     */
    public $accountId;

    /**
     * @description Aliyun account name.
     *
     * - Note: If it is a sub-account, the format should be \\"primary account: sub-account\\". For example: master_test@aliyun.com:subaccount
     * - Format check: Maximum length of 50 characters.
     *
     * @example xxxxxx@163.com
     *
     * @deprecated
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Whether to assign the organization administrator role. Value range:
     *
     * - true: Yes
     * - false: No
     *
     * <notice>This parameter is deprecated and not recommended for use. It is invalid when RoleIds is provided.</notice>
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $adminUser;

    /**
     * @description Whether to assign the organization permission administrator role. Value range:
     *
     * - true: Yes
     * - false: No
     *
     * <notice>This parameter is deprecated and not recommended for use. It is invalid when RoleIds is provided.</notice>
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $authAdminUser;

    /**
     * @description Aliyun account nickname.
     *
     * - Format check: Maximum length of 50 characters.
     * - Special format validation: Chinese and English characters, numbers, _ \\ / | () ] [
     *
     * This parameter is required.
     *
     * @example ddd
     *
     * @var string
     */
    public $nickName;

    /**
     * @description Preset or custom organization role IDs bound to the user, separated by commas, with a maximum of 3. Value range:
     * - Organization Administrator (preset role): 111111111
     * - Permission Administrator (preset role): 111111112
     * - Regular User (preset role): 111111113
     *
     * @example 111111111,456
     *
     * @var string
     */
    public $roleIds;

    /**
     * @description The user type of the organization member. Value range:
     * - 1: Developer
     * - 2: Visitor
     * - 3: Analyst
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'adminUser' => 'AdminUser',
        'authAdminUser' => 'AuthAdminUser',
        'nickName' => 'NickName',
        'roleIds' => 'RoleIds',
        'userType' => 'UserType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->adminUser) {
            $res['AdminUser'] = $this->adminUser;
        }
        if (null !== $this->authAdminUser) {
            $res['AuthAdminUser'] = $this->authAdminUser;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AdminUser'])) {
            $model->adminUser = $map['AdminUser'];
        }
        if (isset($map['AuthAdminUser'])) {
            $model->authAdminUser = $map['AuthAdminUser'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
