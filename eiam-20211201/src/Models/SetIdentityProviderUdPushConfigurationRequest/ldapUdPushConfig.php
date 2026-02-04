<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPushConfigurationRequest;

use AlibabaCloud\Dara\Model;

class ldapUdPushConfig extends Model
{
    /**
     * @var string
     */
    public $organizationUnitObjectClass;

    /**
     * @var string
     */
    public $organizationalUnitRdn;

    /**
     * @var string
     */
    public $passwordSyncStatus;

    /**
     * @var string
     */
    public $userObjectClass;

    /**
     * @var string
     */
    public $userRdn;
    protected $_name = [
        'organizationUnitObjectClass' => 'OrganizationUnitObjectClass',
        'organizationalUnitRdn' => 'OrganizationalUnitRdn',
        'passwordSyncStatus' => 'PasswordSyncStatus',
        'userObjectClass' => 'UserObjectClass',
        'userRdn' => 'UserRdn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationUnitObjectClass) {
            $res['OrganizationUnitObjectClass'] = $this->organizationUnitObjectClass;
        }

        if (null !== $this->organizationalUnitRdn) {
            $res['OrganizationalUnitRdn'] = $this->organizationalUnitRdn;
        }

        if (null !== $this->passwordSyncStatus) {
            $res['PasswordSyncStatus'] = $this->passwordSyncStatus;
        }

        if (null !== $this->userObjectClass) {
            $res['UserObjectClass'] = $this->userObjectClass;
        }

        if (null !== $this->userRdn) {
            $res['UserRdn'] = $this->userRdn;
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
        if (isset($map['OrganizationUnitObjectClass'])) {
            $model->organizationUnitObjectClass = $map['OrganizationUnitObjectClass'];
        }

        if (isset($map['OrganizationalUnitRdn'])) {
            $model->organizationalUnitRdn = $map['OrganizationalUnitRdn'];
        }

        if (isset($map['PasswordSyncStatus'])) {
            $model->passwordSyncStatus = $map['PasswordSyncStatus'];
        }

        if (isset($map['UserObjectClass'])) {
            $model->userObjectClass = $map['UserObjectClass'];
        }

        if (isset($map['UserRdn'])) {
            $model->userRdn = $map['UserRdn'];
        }

        return $model;
    }
}
