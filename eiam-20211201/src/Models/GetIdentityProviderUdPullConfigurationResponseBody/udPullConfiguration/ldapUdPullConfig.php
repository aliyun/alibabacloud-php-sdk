<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;

use AlibabaCloud\Tea\Model;

class ldapUdPullConfig extends Model
{
    /**
     * @description 组成员标识
     *
     * @example group
     *
     * @var string
     */
    public $groupMemberAttributeName;

    /**
     * @description 组objectClass
     *
     * @example member
     *
     * @var string
     */
    public $groupObjectClass;

    /**
     * @description 组自定义Filter
     *
     * @example (|(cn=test)(group=test@test.com))
     *
     * @var string
     */
    public $groupObjectClassCustomFilter;

    /**
     * @description 组织objectClass
     *
     * @example ou,top
     *
     * @var string
     */
    public $organizationUnitObjectClass;

    /**
     * @description 用户objectClass
     *
     * @example ou,top
     *
     * @var string
     */
    public $userObjectClass;

    /**
     * @description 用户自定义Filter
     *
     * @example (|(cn=test)(mail=test@test.com))
     *
     * @var string
     */
    public $userObjectClassCustomFilter;
    protected $_name = [
        'groupMemberAttributeName' => 'GroupMemberAttributeName',
        'groupObjectClass' => 'GroupObjectClass',
        'groupObjectClassCustomFilter' => 'GroupObjectClassCustomFilter',
        'organizationUnitObjectClass' => 'OrganizationUnitObjectClass',
        'userObjectClass' => 'UserObjectClass',
        'userObjectClassCustomFilter' => 'UserObjectClassCustomFilter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupMemberAttributeName) {
            $res['GroupMemberAttributeName'] = $this->groupMemberAttributeName;
        }
        if (null !== $this->groupObjectClass) {
            $res['GroupObjectClass'] = $this->groupObjectClass;
        }
        if (null !== $this->groupObjectClassCustomFilter) {
            $res['GroupObjectClassCustomFilter'] = $this->groupObjectClassCustomFilter;
        }
        if (null !== $this->organizationUnitObjectClass) {
            $res['OrganizationUnitObjectClass'] = $this->organizationUnitObjectClass;
        }
        if (null !== $this->userObjectClass) {
            $res['UserObjectClass'] = $this->userObjectClass;
        }
        if (null !== $this->userObjectClassCustomFilter) {
            $res['UserObjectClassCustomFilter'] = $this->userObjectClassCustomFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ldapUdPullConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupMemberAttributeName'])) {
            $model->groupMemberAttributeName = $map['GroupMemberAttributeName'];
        }
        if (isset($map['GroupObjectClass'])) {
            $model->groupObjectClass = $map['GroupObjectClass'];
        }
        if (isset($map['GroupObjectClassCustomFilter'])) {
            $model->groupObjectClassCustomFilter = $map['GroupObjectClassCustomFilter'];
        }
        if (isset($map['OrganizationUnitObjectClass'])) {
            $model->organizationUnitObjectClass = $map['OrganizationUnitObjectClass'];
        }
        if (isset($map['UserObjectClass'])) {
            $model->userObjectClass = $map['UserObjectClass'];
        }
        if (isset($map['UserObjectClassCustomFilter'])) {
            $model->userObjectClassCustomFilter = $map['UserObjectClassCustomFilter'];
        }

        return $model;
    }
}
