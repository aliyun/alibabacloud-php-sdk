<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceTwoFactorRequest extends Model
{
    /**
     * @var string
     */
    public $enableTwoFactor;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $skipTwoFactorTime;

    /**
     * @var string
     */
    public $twoFactorMethods;
    protected $_name = [
        'enableTwoFactor' => 'EnableTwoFactor',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'skipTwoFactorTime' => 'SkipTwoFactorTime',
        'twoFactorMethods' => 'TwoFactorMethods',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTwoFactor) {
            $res['EnableTwoFactor'] = $this->enableTwoFactor;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->skipTwoFactorTime) {
            $res['SkipTwoFactorTime'] = $this->skipTwoFactorTime;
        }

        if (null !== $this->twoFactorMethods) {
            $res['TwoFactorMethods'] = $this->twoFactorMethods;
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
        if (isset($map['EnableTwoFactor'])) {
            $model->enableTwoFactor = $map['EnableTwoFactor'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SkipTwoFactorTime'])) {
            $model->skipTwoFactorTime = $map['SkipTwoFactorTime'];
        }

        if (isset($map['TwoFactorMethods'])) {
            $model->twoFactorMethods = $map['TwoFactorMethods'];
        }

        return $model;
    }
}
