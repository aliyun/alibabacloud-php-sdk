<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class openForgetPasswordConfiguration extends Model
{
    /**
     * @description The authentication channels. Valid values:
     * email
     * sms
     * totp
     * web_authn
     *
     * @var string[]
     */
    public $authenticationChannels;

    /**
     * @description Indicates whether the forgot password feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Indicates whether email authentication is enabled for the forgot password feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enableEmail;

    /**
     * @description Indicates whether Short Message Service (SMS) authentication is enabled for the forgot password feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSms;

    /**
     * @description The status of the forgot password feature. Valid values: enabled and disabled.
     *
     * @example enabled
     *
     * @var string
     */
    public $forgetPasswordStatus;
    protected $_name = [
        'authenticationChannels' => 'AuthenticationChannels',
        'enable' => 'Enable',
        'enableEmail' => 'EnableEmail',
        'enableSms' => 'EnableSms',
        'forgetPasswordStatus' => 'ForgetPasswordStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationChannels) {
            $res['AuthenticationChannels'] = $this->authenticationChannels;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->enableEmail) {
            $res['EnableEmail'] = $this->enableEmail;
        }
        if (null !== $this->enableSms) {
            $res['EnableSms'] = $this->enableSms;
        }
        if (null !== $this->forgetPasswordStatus) {
            $res['ForgetPasswordStatus'] = $this->forgetPasswordStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openForgetPasswordConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationChannels'])) {
            if (!empty($map['AuthenticationChannels'])) {
                $model->authenticationChannels = $map['AuthenticationChannels'];
            }
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EnableEmail'])) {
            $model->enableEmail = $map['EnableEmail'];
        }
        if (isset($map['EnableSms'])) {
            $model->enableSms = $map['EnableSms'];
        }
        if (isset($map['ForgetPasswordStatus'])) {
            $model->forgetPasswordStatus = $map['ForgetPasswordStatus'];
        }

        return $model;
    }
}
