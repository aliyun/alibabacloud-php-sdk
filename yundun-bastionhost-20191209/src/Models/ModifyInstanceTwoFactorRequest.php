<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceTwoFactorRequest extends Model
{
    /**
     * @var string
     */
    public $dingTalkConfig;

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
    public $messageLanguage;

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
        'dingTalkConfig'    => 'DingTalkConfig',
        'enableTwoFactor'   => 'EnableTwoFactor',
        'instanceId'        => 'InstanceId',
        'messageLanguage'   => 'MessageLanguage',
        'regionId'          => 'RegionId',
        'skipTwoFactorTime' => 'SkipTwoFactorTime',
        'twoFactorMethods'  => 'TwoFactorMethods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingTalkConfig) {
            $res['DingTalkConfig'] = $this->dingTalkConfig;
        }
        if (null !== $this->enableTwoFactor) {
            $res['EnableTwoFactor'] = $this->enableTwoFactor;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->messageLanguage) {
            $res['MessageLanguage'] = $this->messageLanguage;
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

    /**
     * @param array $map
     *
     * @return ModifyInstanceTwoFactorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingTalkConfig'])) {
            $model->dingTalkConfig = $map['DingTalkConfig'];
        }
        if (isset($map['EnableTwoFactor'])) {
            $model->enableTwoFactor = $map['EnableTwoFactor'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MessageLanguage'])) {
            $model->messageLanguage = $map['MessageLanguage'];
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
