<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\extras;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\groups;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\orgs;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\properties;

class users extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $externalName;

    /**
     * @var extras
     */
    public $extras;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isTenantManager;

    /**
     * @var string
     */
    public $jobNumber;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var orgs[]
     */
    public $orgs;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var int
     */
    public $passwordExpireDays;

    /**
     * @var int
     */
    public $passwordExpireRestDays;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var properties[]
     */
    public $properties;

    /**
     * @var string
     */
    public $realNickName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'address' => 'Address',
        'avatar' => 'Avatar',
        'email' => 'Email',
        'enableAdminAccess' => 'EnableAdminAccess',
        'endUserId' => 'EndUserId',
        'externalName' => 'ExternalName',
        'extras' => 'Extras',
        'groups' => 'Groups',
        'id' => 'Id',
        'isTenantManager' => 'IsTenantManager',
        'jobNumber' => 'JobNumber',
        'nickName' => 'NickName',
        'orgId' => 'OrgId',
        'orgs' => 'Orgs',
        'ownerType' => 'OwnerType',
        'passwordExpireDays' => 'PasswordExpireDays',
        'passwordExpireRestDays' => 'PasswordExpireRestDays',
        'phone' => 'Phone',
        'properties' => 'Properties',
        'realNickName' => 'RealNickName',
        'remark' => 'Remark',
        'status' => 'Status',
        'wyId' => 'WyId',
    ];

    public function validate()
    {
        if (null !== $this->extras) {
            $this->extras->validate();
        }
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (\is_array($this->orgs)) {
            Model::validateArray($this->orgs);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->externalName) {
            $res['ExternalName'] = $this->externalName;
        }

        if (null !== $this->extras) {
            $res['Extras'] = null !== $this->extras ? $this->extras->toArray($noStream) : $this->extras;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isTenantManager) {
            $res['IsTenantManager'] = $this->isTenantManager;
        }

        if (null !== $this->jobNumber) {
            $res['JobNumber'] = $this->jobNumber;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgs) {
            if (\is_array($this->orgs)) {
                $res['Orgs'] = [];
                $n1 = 0;
                foreach ($this->orgs as $item1) {
                    $res['Orgs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->passwordExpireDays) {
            $res['PasswordExpireDays'] = $this->passwordExpireDays;
        }

        if (null !== $this->passwordExpireRestDays) {
            $res['PasswordExpireRestDays'] = $this->passwordExpireRestDays;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['Properties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->realNickName) {
            $res['RealNickName'] = $this->realNickName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['ExternalName'])) {
            $model->externalName = $map['ExternalName'];
        }

        if (isset($map['Extras'])) {
            $model->extras = extras::fromMap($map['Extras']);
        }

        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsTenantManager'])) {
            $model->isTenantManager = $map['IsTenantManager'];
        }

        if (isset($map['JobNumber'])) {
            $model->jobNumber = $map['JobNumber'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['Orgs'])) {
            if (!empty($map['Orgs'])) {
                $model->orgs = [];
                $n1 = 0;
                foreach ($map['Orgs'] as $item1) {
                    $model->orgs[$n1] = orgs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['PasswordExpireDays'])) {
            $model->passwordExpireDays = $map['PasswordExpireDays'];
        }

        if (isset($map['PasswordExpireRestDays'])) {
            $model->passwordExpireRestDays = $map['PasswordExpireRestDays'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['Properties'] as $item1) {
                    $model->properties[$n1] = properties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RealNickName'])) {
            $model->realNickName = $map['RealNickName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
