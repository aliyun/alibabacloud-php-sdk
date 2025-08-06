<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListUsersRequest extends Model
{
    /**
     * @var string
     */
    public $displayNameStartsWith;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $phoneRegion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userExternalId;

    /**
     * @var string[]
     */
    public $userIds;

    /**
     * @var string
     */
    public $userSourceId;

    /**
     * @var string
     */
    public $userSourceType;

    /**
     * @var string
     */
    public $usernameStartsWith;
    protected $_name = [
        'displayNameStartsWith' => 'DisplayNameStartsWith',
        'email' => 'Email',
        'instanceId' => 'InstanceId',
        'organizationalUnitId' => 'OrganizationalUnitId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'phoneNumber' => 'PhoneNumber',
        'phoneRegion' => 'PhoneRegion',
        'status' => 'Status',
        'userExternalId' => 'UserExternalId',
        'userIds' => 'UserIds',
        'userSourceId' => 'UserSourceId',
        'userSourceType' => 'UserSourceType',
        'usernameStartsWith' => 'UsernameStartsWith',
    ];

    public function validate()
    {
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
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
