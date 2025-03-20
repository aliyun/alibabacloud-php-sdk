<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class autoCreateUserConfig extends Model
{
    /**
     * @description 自动创建账户是否开启
     *
     * @example disabled
     *
     * @var string
     */
    public $autoCreateUserStatus;

    /**
     * @var string[]
     */
    public $targetOrganizationalUnitIds;
    protected $_name = [
        'autoCreateUserStatus' => 'AutoCreateUserStatus',
        'targetOrganizationalUnitIds' => 'TargetOrganizationalUnitIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreateUserStatus) {
            $res['AutoCreateUserStatus'] = $this->autoCreateUserStatus;
        }
        if (null !== $this->targetOrganizationalUnitIds) {
            $res['TargetOrganizationalUnitIds'] = $this->targetOrganizationalUnitIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoCreateUserConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreateUserStatus'])) {
            $model->autoCreateUserStatus = $map['AutoCreateUserStatus'];
        }
        if (isset($map['TargetOrganizationalUnitIds'])) {
            if (!empty($map['TargetOrganizationalUnitIds'])) {
                $model->targetOrganizationalUnitIds = $map['TargetOrganizationalUnitIds'];
            }
        }

        return $model;
    }
}
