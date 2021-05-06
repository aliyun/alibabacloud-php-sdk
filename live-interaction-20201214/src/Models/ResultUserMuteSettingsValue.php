<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class ResultUserMuteSettingsValue extends Model
{
    /**
     * @var bool
     */
    public $mute;

    /**
     * @var int
     */
    public $expireTime;
    protected $_name = [
        'mute'       => 'Mute',
        'expireTime' => 'ExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResultUserMuteSettingsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        return $model;
    }
}
