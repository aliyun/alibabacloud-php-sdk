<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;

use AlibabaCloud\Dara\Model;

class pullProtectedRule extends Model
{
    /**
     * @var int
     */
    public $groupDeletedThreshold;

    /**
     * @var int
     */
    public $organizationalUnitDeletedThreshold;

    /**
     * @var int
     */
    public $userDeletedThreshold;
    protected $_name = [
        'groupDeletedThreshold' => 'GroupDeletedThreshold',
        'organizationalUnitDeletedThreshold' => 'OrganizationalUnitDeletedThreshold',
        'userDeletedThreshold' => 'UserDeletedThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupDeletedThreshold) {
            $res['GroupDeletedThreshold'] = $this->groupDeletedThreshold;
        }

        if (null !== $this->organizationalUnitDeletedThreshold) {
            $res['OrganizationalUnitDeletedThreshold'] = $this->organizationalUnitDeletedThreshold;
        }

        if (null !== $this->userDeletedThreshold) {
            $res['UserDeletedThreshold'] = $this->userDeletedThreshold;
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
        if (isset($map['GroupDeletedThreshold'])) {
            $model->groupDeletedThreshold = $map['GroupDeletedThreshold'];
        }

        if (isset($map['OrganizationalUnitDeletedThreshold'])) {
            $model->organizationalUnitDeletedThreshold = $map['OrganizationalUnitDeletedThreshold'];
        }

        if (isset($map['UserDeletedThreshold'])) {
            $model->userDeletedThreshold = $map['UserDeletedThreshold'];
        }

        return $model;
    }
}
