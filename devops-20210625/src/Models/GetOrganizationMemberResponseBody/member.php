<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponseBody\member\identities;
use AlibabaCloud\Tea\Model;

class member extends Model
{
    /**
     * @example 123456677888
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 1631845101798
     *
     * @var int
     */
    public $birthday;

    /**
     * @var string[]
     */
    public $deptLists;

    /**
     * @example 123@mail.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1631845101798
     *
     * @var int
     */
    public $hiredDate;

    /**
     * @var identities
     */
    public $identities;

    /**
     * @example 1631845101798
     *
     * @var int
     */
    public $joinTime;

    /**
     * @example 1631845101798
     *
     * @var int
     */
    public $lastVisitTime;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $organizationMemberName;

    /**
     * @example 8fc0c9ff039711dd64acd000
     *
     * @var string
     */
    public $organizationRoleId;

    /**
     * @var string
     */
    public $organizationRoleName;

    /**
     * @example normal
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accountId'              => 'accountId',
        'birthday'               => 'birthday',
        'deptLists'              => 'deptLists',
        'email'                  => 'email',
        'hiredDate'              => 'hiredDate',
        'identities'             => 'identities',
        'joinTime'               => 'joinTime',
        'lastVisitTime'          => 'lastVisitTime',
        'mobile'                 => 'mobile',
        'organizationMemberName' => 'organizationMemberName',
        'organizationRoleId'     => 'organizationRoleId',
        'organizationRoleName'   => 'organizationRoleName',
        'state'                  => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->deptLists) {
            $res['deptLists'] = $this->deptLists;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }
        if (null !== $this->identities) {
            $res['identities'] = null !== $this->identities ? $this->identities->toMap() : null;
        }
        if (null !== $this->joinTime) {
            $res['joinTime'] = $this->joinTime;
        }
        if (null !== $this->lastVisitTime) {
            $res['lastVisitTime'] = $this->lastVisitTime;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->organizationMemberName) {
            $res['organizationMemberName'] = $this->organizationMemberName;
        }
        if (null !== $this->organizationRoleId) {
            $res['organizationRoleId'] = $this->organizationRoleId;
        }
        if (null !== $this->organizationRoleName) {
            $res['organizationRoleName'] = $this->organizationRoleName;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return member
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['deptLists'])) {
            if (!empty($map['deptLists'])) {
                $model->deptLists = $map['deptLists'];
            }
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['hiredDate'])) {
            $model->hiredDate = $map['hiredDate'];
        }
        if (isset($map['identities'])) {
            $model->identities = identities::fromMap($map['identities']);
        }
        if (isset($map['joinTime'])) {
            $model->joinTime = $map['joinTime'];
        }
        if (isset($map['lastVisitTime'])) {
            $model->lastVisitTime = $map['lastVisitTime'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['organizationMemberName'])) {
            $model->organizationMemberName = $map['organizationMemberName'];
        }
        if (isset($map['organizationRoleId'])) {
            $model->organizationRoleId = $map['organizationRoleId'];
        }
        if (isset($map['organizationRoleName'])) {
            $model->organizationRoleName = $map['organizationRoleName'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
