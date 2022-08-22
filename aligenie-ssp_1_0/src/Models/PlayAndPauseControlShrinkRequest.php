<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class PlayAndPauseControlShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $openPlayAndPauseControlParamShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'deviceInfoShrink'                   => 'DeviceInfo',
        'openPlayAndPauseControlParamShrink' => 'OpenPlayAndPauseControlParam',
        'userInfoShrink'                     => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }
        if (null !== $this->openPlayAndPauseControlParamShrink) {
            $res['OpenPlayAndPauseControlParam'] = $this->openPlayAndPauseControlParamShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayAndPauseControlShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['OpenPlayAndPauseControlParam'])) {
            $model->openPlayAndPauseControlParamShrink = $map['OpenPlayAndPauseControlParam'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
