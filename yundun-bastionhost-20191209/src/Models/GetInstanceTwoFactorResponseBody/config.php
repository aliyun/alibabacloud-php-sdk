<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorResponseBody\config\dingTalkConfig;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var dingTalkConfig
     */
    public $dingTalkConfig;

    /**
     * @var bool
     */
    public $enableTwoFactor;

    /**
     * @var string
     */
    public $messageLanguage;

    /**
     * @var int
     */
    public $skipTwoFactorTime;

    /**
     * @var string[]
     */
    public $twoFactorMethods;
    protected $_name = [
        'dingTalkConfig'    => 'DingTalkConfig',
        'enableTwoFactor'   => 'EnableTwoFactor',
        'messageLanguage'   => 'MessageLanguage',
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
            $res['DingTalkConfig'] = null !== $this->dingTalkConfig ? $this->dingTalkConfig->toMap() : null;
        }
        if (null !== $this->enableTwoFactor) {
            $res['EnableTwoFactor'] = $this->enableTwoFactor;
        }
        if (null !== $this->messageLanguage) {
            $res['MessageLanguage'] = $this->messageLanguage;
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
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingTalkConfig'])) {
            $model->dingTalkConfig = dingTalkConfig::fromMap($map['DingTalkConfig']);
        }
        if (isset($map['EnableTwoFactor'])) {
            $model->enableTwoFactor = $map['EnableTwoFactor'];
        }
        if (isset($map['MessageLanguage'])) {
            $model->messageLanguage = $map['MessageLanguage'];
        }
        if (isset($map['SkipTwoFactorTime'])) {
            $model->skipTwoFactorTime = $map['SkipTwoFactorTime'];
        }
        if (isset($map['TwoFactorMethods'])) {
            if (!empty($map['TwoFactorMethods'])) {
                $model->twoFactorMethods = $map['TwoFactorMethods'];
            }
        }

        return $model;
    }
}
