<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;

use AlibabaCloud\Tea\Model;

class pullProtectedRule extends Model
{
    /**
     * @description Group Deletion Threshold: If the number of deleted groups exceeds this value, the synchronization task will be terminated.
     *
     * @example 10
     *
     * @var int
     */
    public $groupDeletedThreshold;

    /**
     * @description Organization Deletion Threshold: If the number of deleted organizations exceeds this value, the synchronization task will be terminated.
     *
     * @example 10
     *
     * @var int
     */
    public $organizationalUnitDeletedThreshold;

    /**
     * @description Account Deletion Threshold: If the number of deleted users exceeds this value, the synchronization task will be terminated.
     *
     * @example 30
     *
     * @var int
     */
    public $userDeletedThreshold;
    protected $_name = [
        'groupDeletedThreshold' => 'GroupDeletedThreshold',
        'organizationalUnitDeletedThreshold' => 'OrganizationalUnitDeletedThreshold',
        'userDeletedThreshold' => 'UserDeletedThreshold',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return pullProtectedRule
     */
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
