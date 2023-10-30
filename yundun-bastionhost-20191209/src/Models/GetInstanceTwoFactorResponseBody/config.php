<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description Queries the settings of two-factor authentication on a bastion host.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTwoFactor;

    /**
     * @example 1
     *
     * @var int
     */
    public $skipTwoFactorTime;

    /**
     * @var string[]
     */
    public $twoFactorMethods;
    protected $_name = [
        'enableTwoFactor'   => 'EnableTwoFactor',
        'skipTwoFactorTime' => 'SkipTwoFactorTime',
        'twoFactorMethods'  => 'TwoFactorMethods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTwoFactor) {
            $res['EnableTwoFactor'] = $this->enableTwoFactor;
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
        if (isset($map['EnableTwoFactor'])) {
            $model->enableTwoFactor = $map['EnableTwoFactor'];
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
