<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 需要禁言的用户
     *
     * @var string[]
     */
    public $appUids;

    /**
     * @description 单位秒
     *
     * @var int
     */
    public $muteDuration;

    /**
     * @description true: 禁言, false: 解除禁言
     *
     * @var bool
     */
    public $mute;
    protected $_name = [
        'appUids'      => 'AppUids',
        'muteDuration' => 'MuteDuration',
        'mute'         => 'Mute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUids) {
            $res['AppUids'] = $this->appUids;
        }
        if (null !== $this->muteDuration) {
            $res['MuteDuration'] = $this->muteDuration;
        }
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUids'])) {
            if (!empty($map['AppUids'])) {
                $model->appUids = $map['AppUids'];
            }
        }
        if (isset($map['MuteDuration'])) {
            $model->muteDuration = $map['MuteDuration'];
        }
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }

        return $model;
    }
}
