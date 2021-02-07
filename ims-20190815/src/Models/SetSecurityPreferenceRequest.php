<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetSecurityPreferenceRequest extends Model
{
    /**
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @var bool
     */
    public $allowUserToManageAccessKeys;

    /**
     * @var bool
     */
    public $allowUserToManageMFADevices;

    /**
     * @var int
     */
    public $loginSessionDuration;

    /**
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'enableSaveMFATicket'         => 'EnableSaveMFATicket',
        'allowUserToChangePassword'   => 'AllowUserToChangePassword',
        'allowUserToManageAccessKeys' => 'AllowUserToManageAccessKeys',
        'allowUserToManageMFADevices' => 'AllowUserToManageMFADevices',
        'loginSessionDuration'        => 'LoginSessionDuration',
        'loginNetworkMasks'           => 'LoginNetworkMasks',
        'akProxySuffix'               => 'AkProxySuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSaveMFATicket) {
            $res['EnableSaveMFATicket'] = $this->enableSaveMFATicket;
        }
        if (null !== $this->allowUserToChangePassword) {
            $res['AllowUserToChangePassword'] = $this->allowUserToChangePassword;
        }
        if (null !== $this->allowUserToManageAccessKeys) {
            $res['AllowUserToManageAccessKeys'] = $this->allowUserToManageAccessKeys;
        }
        if (null !== $this->allowUserToManageMFADevices) {
            $res['AllowUserToManageMFADevices'] = $this->allowUserToManageMFADevices;
        }
        if (null !== $this->loginSessionDuration) {
            $res['LoginSessionDuration'] = $this->loginSessionDuration;
        }
        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSecurityPreferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSaveMFATicket'])) {
            $model->enableSaveMFATicket = $map['EnableSaveMFATicket'];
        }
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
        }
        if (isset($map['AllowUserToManageAccessKeys'])) {
            $model->allowUserToManageAccessKeys = $map['AllowUserToManageAccessKeys'];
        }
        if (isset($map['AllowUserToManageMFADevices'])) {
            $model->allowUserToManageMFADevices = $map['AllowUserToManageMFADevices'];
        }
        if (isset($map['LoginSessionDuration'])) {
            $model->loginSessionDuration = $map['LoginSessionDuration'];
        }
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
