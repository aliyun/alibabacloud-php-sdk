<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListUsersRequest extends Model
{
    /**
     * @description 账户展示名，模糊匹配
     *
     * @example name_001
     *
     * @var string
     */
    public $displayNameStartsWith;

    /**
     * @description The email address of the user who owns the account.
     *
     * @example user@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the organizational unit.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The mobile number of the user who owns the account.
     *
     * @example 156xxxxxxx
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The country code of the mobile number. For example, the country code of China is 86 without 00 or +.
     *
     * @example 86
     *
     * @var string
     */
    public $phoneRegion;

    /**
     * @description The status of the account. Valid values:
     *
     *   enabled: The account is enabled.
     *   disabled: The account is disabled.
     *
     * @example enable
     *
     * @var string
     */
    public $status;

    /**
     * @description The external ID of the account. The external ID can be used by external data to map the data of the account in IDaaS EIAM.
     *
     * For accounts with the same source type and source ID, each account has a unique external ID.
     * @example id_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description 账户的ID集合
     *
     * @var string[]
     */
    public $userIds;

    /**
     * @description The source ID of the account.
     *
     * If the account was created in IDaaS, its source ID is the ID of the IDaaS instance. If the account was imported, its source ID is the enterprise ID in the source. For example, if the account was imported from DingTalk, its source ID is the corpId value of the enterprise in DingTalk.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $userSourceId;

    /**
     * @description The source type of the account. Valid values:
     *
     *   build_in: The account was created in IDaaS.
     *   ding_talk: The account was imported from DingTalk.
     *   ad: The account was imported from Microsoft Active Directory (AD).
     *   ldap: The account was imported from a Lightweight Directory Access Protocol (LDAP) service.
     *
     * @example build_in
     *
     * @var string
     */
    public $userSourceType;

    /**
     * @description 账户名，左模糊匹配
     *
     * @example name_001
     *
     * @var string
     */
    public $usernameStartsWith;
    protected $_name = [
        'displayNameStartsWith' => 'DisplayNameStartsWith',
        'email'                 => 'Email',
        'instanceId'            => 'InstanceId',
        'organizationalUnitId'  => 'OrganizationalUnitId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'phoneNumber'           => 'PhoneNumber',
        'phoneRegion'           => 'PhoneRegion',
        'status'                => 'Status',
        'userExternalId'        => 'UserExternalId',
        'userIds'               => 'UserIds',
        'userSourceId'          => 'UserSourceId',
        'userSourceType'        => 'UserSourceType',
        'usernameStartsWith'    => 'UsernameStartsWith',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayNameStartsWith) {
            $res['DisplayNameStartsWith'] = $this->displayNameStartsWith;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneRegion) {
            $res['PhoneRegion'] = $this->phoneRegion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userExternalId) {
            $res['UserExternalId'] = $this->userExternalId;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }
        if (null !== $this->userSourceId) {
            $res['UserSourceId'] = $this->userSourceId;
        }
        if (null !== $this->userSourceType) {
            $res['UserSourceType'] = $this->userSourceType;
        }
        if (null !== $this->usernameStartsWith) {
            $res['UsernameStartsWith'] = $this->usernameStartsWith;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayNameStartsWith'])) {
            $model->displayNameStartsWith = $map['DisplayNameStartsWith'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PhoneRegion'])) {
            $model->phoneRegion = $map['PhoneRegion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserExternalId'])) {
            $model->userExternalId = $map['UserExternalId'];
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }
        if (isset($map['UserSourceId'])) {
            $model->userSourceId = $map['UserSourceId'];
        }
        if (isset($map['UserSourceType'])) {
            $model->userSourceType = $map['UserSourceType'];
        }
        if (isset($map['UsernameStartsWith'])) {
            $model->usernameStartsWith = $map['UsernameStartsWith'];
        }

        return $model;
    }
}
