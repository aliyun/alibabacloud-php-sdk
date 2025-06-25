<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorResponseBody;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $enableTwoFactor;

    /**
     * @var int
     */
    public $skipTwoFactorTime;

    /**
     * @var string[]
     */
    public $twoFactorMethods;
    protected $_name = [
        'enableTwoFactor' => 'EnableTwoFactor',
        'skipTwoFactorTime' => 'SkipTwoFactorTime',
        'twoFactorMethods' => 'TwoFactorMethods',
    ];

    public function validate()
    {
        if (\is_array($this->twoFactorMethods)) {
            Model::validateArray($this->twoFactorMethods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTwoFactor) {
            $res['EnableTwoFactor'] = $this->enableTwoFactor;
        }

        if (null !== $this->skipTwoFactorTime) {
            $res['SkipTwoFactorTime'] = $this->skipTwoFactorTime;
        }

        if (null !== $this->twoFactorMethods) {
            if (\is_array($this->twoFactorMethods)) {
                $res['TwoFactorMethods'] = [];
                $n1 = 0;
                foreach ($this->twoFactorMethods as $item1) {
                    $res['TwoFactorMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SkipTwoFactorTime'])) {
            $model->skipTwoFactorTime = $map['SkipTwoFactorTime'];
        }

        if (isset($map['TwoFactorMethods'])) {
            if (!empty($map['TwoFactorMethods'])) {
                $model->twoFactorMethods = [];
                $n1 = 0;
                foreach ($map['TwoFactorMethods'] as $item1) {
                    $model->twoFactorMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
