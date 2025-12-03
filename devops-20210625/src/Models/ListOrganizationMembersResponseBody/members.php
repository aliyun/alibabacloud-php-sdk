<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersResponseBody\members\identities;

class members extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $birthday;

    /**
     * @var string[]
     */
    public $deptLists;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $hiredDate;

    /**
     * @var identities
     */
    public $identities;

    /**
     * @var string
     */
    public $jobNumber;

    /**
     * @var int
     */
    public $joinTime;

    /**
     * @var int
     */
    public $lastVisitTime;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $organizationMemberName;

    /**
     * @var string
     */
    public $organizationRoleId;

    /**
     * @var string
     */
    public $organizationRoleName;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'accountId' => 'accountId',
        'birthday' => 'birthday',
        'deptLists' => 'deptLists',
        'email' => 'email',
        'hiredDate' => 'hiredDate',
        'identities' => 'identities',
        'jobNumber' => 'jobNumber',
        'joinTime' => 'joinTime',
        'lastVisitTime' => 'lastVisitTime',
        'mobile' => 'mobile',
        'organizationMemberName' => 'organizationMemberName',
        'organizationRoleId' => 'organizationRoleId',
        'organizationRoleName' => 'organizationRoleName',
        'state' => 'state',
    ];

    public function validate()
    {
        if (\is_array($this->deptLists)) {
            Model::validateArray($this->deptLists);
        }
        if (null !== $this->identities) {
            $this->identities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }

        if (null !== $this->deptLists) {
            if (\is_array($this->deptLists)) {
                $res['deptLists'] = [];
                $n1 = 0;
                foreach ($this->deptLists as $item1) {
                    $res['deptLists'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }

        if (null !== $this->identities) {
            $res['identities'] = null !== $this->identities ? $this->identities->toArray($noStream) : $this->identities;
        }

        if (null !== $this->jobNumber) {
            $res['jobNumber'] = $this->jobNumber;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->deptLists = [];
                $n1 = 0;
                foreach ($map['deptLists'] as $item1) {
                    $model->deptLists[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['jobNumber'])) {
            $model->jobNumber = $map['jobNumber'];
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
