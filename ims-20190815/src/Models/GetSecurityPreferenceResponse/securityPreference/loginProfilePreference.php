<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponse\securityPreference;

use AlibabaCloud\Tea\Model;

class loginProfilePreference extends Model
{
    /**
     * @var int
     */
    public $loginSessionDuration;

    /**
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @var bool
     */
    public $enableSaveMFATicket;
    protected $_name = [
        'loginSessionDuration'      => 'LoginSessionDuration',
        'loginNetworkMasks'         => 'LoginNetworkMasks',
        'allowUserToChangePassword' => 'AllowUserToChangePassword',
        'enableSaveMFATicket'       => 'EnableSaveMFATicket',
    ];

    public function validate()
    {
        Model::validateRequired('loginSessionDuration', $this->loginSessionDuration, true);
        Model::validateRequired('loginNetworkMasks', $this->loginNetworkMasks, true);
        Model::validateRequired('allowUserToChangePassword', $this->allowUserToChangePassword, true);
        Model::validateRequired('enableSaveMFATicket', $this->enableSaveMFATicket, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginSessionDuration) {
            $res['LoginSessionDuration'] = $this->loginSessionDuration;
        }
        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }
        if (null !== $this->allowUserToChangePassword) {
            $res['AllowUserToChangePassword'] = $this->allowUserToChangePassword;
        }
        if (null !== $this->enableSaveMFATicket) {
            $res['EnableSaveMFATicket'] = $this->enableSaveMFATicket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginProfilePreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginSessionDuration'])) {
            $model->loginSessionDuration = $map['LoginSessionDuration'];
        }
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
        }
        if (isset($map['EnableSaveMFATicket'])) {
            $model->enableSaveMFATicket = $map['EnableSaveMFATicket'];
        }

        return $model;
    }
}
