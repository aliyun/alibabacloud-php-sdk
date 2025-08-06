<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class openForgetPasswordConfiguration extends Model
{
    /**
     * @var string[]
     */
    public $authenticationChannels;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $enableEmail;

    /**
     * @var bool
     */
    public $enableSms;

    /**
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

    public function validate()
    {
        if (\is_array($this->authenticationChannels)) {
            Model::validateArray($this->authenticationChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationChannels) {
            if (\is_array($this->authenticationChannels)) {
                $res['AuthenticationChannels'] = [];
                $n1 = 0;
                foreach ($this->authenticationChannels as $item1) {
                    $res['AuthenticationChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationChannels'])) {
            if (!empty($map['AuthenticationChannels'])) {
                $model->authenticationChannels = [];
                $n1 = 0;
                foreach ($map['AuthenticationChannels'] as $item1) {
                    $model->authenticationChannels[$n1] = $item1;
                    ++$n1;
                }
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
