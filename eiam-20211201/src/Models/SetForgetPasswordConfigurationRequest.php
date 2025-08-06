<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SetForgetPasswordConfigurationRequest extends Model
{
    /**
     * @var string[]
     */
    public $authenticationChannels;

    /**
     * @var string
     */
    public $forgetPasswordStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'authenticationChannels' => 'AuthenticationChannels',
        'forgetPasswordStatus' => 'ForgetPasswordStatus',
        'instanceId' => 'InstanceId',
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

        if (null !== $this->forgetPasswordStatus) {
            $res['ForgetPasswordStatus'] = $this->forgetPasswordStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['ForgetPasswordStatus'])) {
            $model->forgetPasswordStatus = $map['ForgetPasswordStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
