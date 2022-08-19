<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserResponseBody\organizationalUnits;
use AlibabaCloud\Tea\Model;

class GetUserResponseBody extends Model
{
    /**
     * @var int
     */
    public $accountExpireTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $emailVerified;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lockExpireTime;

    /**
     * @var organizationalUnits[]
     */
    public $organizationalUnits;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @var string
     */
    public $phoneRegion;

    /**
     * @var string
     */
    public $primaryOrganizationalUnitId;

    /**
     * @var int
     */
    public $registerTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userExternalId;

    /**
     * @var string
     */
    public $userId;

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
    public $username;
    protected $_name = [
        'accountExpireTime'           => 'accountExpireTime',
        'createTime'                  => 'createTime',
        'description'                 => 'description',
        'displayName'                 => 'displayName',
        'email'                       => 'email',
        'emailVerified'               => 'emailVerified',
        'instanceId'                  => 'instanceId',
        'lockExpireTime'              => 'lockExpireTime',
        'organizationalUnits'         => 'organizationalUnits',
        'phoneNumber'                 => 'phoneNumber',
        'phoneNumberVerified'         => 'phoneNumberVerified',
        'phoneRegion'                 => 'phoneRegion',
        'primaryOrganizationalUnitId' => 'primaryOrganizationalUnitId',
        'registerTime'                => 'registerTime',
        'status'                      => 'status',
        'updateTime'                  => 'updateTime',
        'userExternalId'              => 'userExternalId',
        'userId'                      => 'userId',
        'userSourceId'                => 'userSourceId',
        'userSourceType'              => 'userSourceType',
        'username'                    => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountExpireTime) {
            $res['accountExpireTime'] = $this->accountExpireTime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->emailVerified) {
            $res['emailVerified'] = $this->emailVerified;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lockExpireTime) {
            $res['lockExpireTime'] = $this->lockExpireTime;
        }
        if (null !== $this->organizationalUnits) {
            $res['organizationalUnits'] = [];
            if (null !== $this->organizationalUnits && \is_array($this->organizationalUnits)) {
                $n = 0;
                foreach ($this->organizationalUnits as $item) {
                    $res['organizationalUnits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->phoneNumber) {
            $res['phoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneNumberVerified) {
            $res['phoneNumberVerified'] = $this->phoneNumberVerified;
        }
        if (null !== $this->phoneRegion) {
            $res['phoneRegion'] = $this->phoneRegion;
        }
        if (null !== $this->primaryOrganizationalUnitId) {
            $res['primaryOrganizationalUnitId'] = $this->primaryOrganizationalUnitId;
        }
        if (null !== $this->registerTime) {
            $res['registerTime'] = $this->registerTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userSourceId) {
            $res['userSourceId'] = $this->userSourceId;
        }
        if (null !== $this->userSourceType) {
            $res['userSourceType'] = $this->userSourceType;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountExpireTime'])) {
            $model->accountExpireTime = $map['accountExpireTime'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['emailVerified'])) {
            $model->emailVerified = $map['emailVerified'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lockExpireTime'])) {
            $model->lockExpireTime = $map['lockExpireTime'];
        }
        if (isset($map['organizationalUnits'])) {
            if (!empty($map['organizationalUnits'])) {
                $model->organizationalUnits = [];
                $n                          = 0;
                foreach ($map['organizationalUnits'] as $item) {
                    $model->organizationalUnits[$n++] = null !== $item ? organizationalUnits::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['phoneNumber'])) {
            $model->phoneNumber = $map['phoneNumber'];
        }
        if (isset($map['phoneNumberVerified'])) {
            $model->phoneNumberVerified = $map['phoneNumberVerified'];
        }
        if (isset($map['phoneRegion'])) {
            $model->phoneRegion = $map['phoneRegion'];
        }
        if (isset($map['primaryOrganizationalUnitId'])) {
            $model->primaryOrganizationalUnitId = $map['primaryOrganizationalUnitId'];
        }
        if (isset($map['registerTime'])) {
            $model->registerTime = $map['registerTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userSourceId'])) {
            $model->userSourceId = $map['userSourceId'];
        }
        if (isset($map['userSourceType'])) {
            $model->userSourceType = $map['userSourceType'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
