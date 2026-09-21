<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedUsersResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupSetId;

    /**
     * @var string[]
     */
    public $appInstancePersistentIds;

    /**
     * @var string
     */
    public $authMode;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $isAuthAllApps;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'accountType' => 'AccountType',
        'appId' => 'AppId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupSetId' => 'AppInstanceGroupSetId',
        'appInstancePersistentIds' => 'AppInstancePersistentIds',
        'authMode' => 'AuthMode',
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'isAuthAllApps' => 'IsAuthAllApps',
        'phone' => 'Phone',
    ];

    public function validate()
    {
        if (\is_array($this->appInstancePersistentIds)) {
            Model::validateArray($this->appInstancePersistentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupSetId) {
            $res['AppInstanceGroupSetId'] = $this->appInstanceGroupSetId;
        }

        if (null !== $this->appInstancePersistentIds) {
            if (\is_array($this->appInstancePersistentIds)) {
                $res['AppInstancePersistentIds'] = [];
                $n1 = 0;
                foreach ($this->appInstancePersistentIds as $item1) {
                    $res['AppInstancePersistentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authMode) {
            $res['AuthMode'] = $this->authMode;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->isAuthAllApps) {
            $res['IsAuthAllApps'] = $this->isAuthAllApps;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupSetId'])) {
            $model->appInstanceGroupSetId = $map['AppInstanceGroupSetId'];
        }

        if (isset($map['AppInstancePersistentIds'])) {
            if (!empty($map['AppInstancePersistentIds'])) {
                $model->appInstancePersistentIds = [];
                $n1 = 0;
                foreach ($map['AppInstancePersistentIds'] as $item1) {
                    $model->appInstancePersistentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthMode'])) {
            $model->authMode = $map['AuthMode'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['IsAuthAllApps'])) {
            $model->isAuthAllApps = $map['IsAuthAllApps'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
