<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderAuthnConfigurationRequest;

use AlibabaCloud\Dara\Model;

class ldapAuthnConfig extends Model
{
    /**
     * @var string
     */
    public $autoUpdatePasswordStatus;

    /**
     * @var string
     */
    public $userLoginIdentifier;

    /**
     * @var string
     */
    public $userObjectClass;
    protected $_name = [
        'autoUpdatePasswordStatus' => 'AutoUpdatePasswordStatus',
        'userLoginIdentifier' => 'UserLoginIdentifier',
        'userObjectClass' => 'UserObjectClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUpdatePasswordStatus) {
            $res['AutoUpdatePasswordStatus'] = $this->autoUpdatePasswordStatus;
        }

        if (null !== $this->userLoginIdentifier) {
            $res['UserLoginIdentifier'] = $this->userLoginIdentifier;
        }

        if (null !== $this->userObjectClass) {
            $res['UserObjectClass'] = $this->userObjectClass;
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
        if (isset($map['AutoUpdatePasswordStatus'])) {
            $model->autoUpdatePasswordStatus = $map['AutoUpdatePasswordStatus'];
        }

        if (isset($map['UserLoginIdentifier'])) {
            $model->userLoginIdentifier = $map['UserLoginIdentifier'];
        }

        if (isset($map['UserObjectClass'])) {
            $model->userObjectClass = $map['UserObjectClass'];
        }

        return $model;
    }
}
