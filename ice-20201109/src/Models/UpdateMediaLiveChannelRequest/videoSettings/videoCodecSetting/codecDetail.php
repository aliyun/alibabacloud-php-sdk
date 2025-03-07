<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

use AlibabaCloud\Tea\Model;

class codecDetail extends Model
{
    /**
     * @description The video encoding level. It is not supported yet.
     *
     * @example H264_LEVEL_AUTO
     *
     * @var string
     */
    public $level;

    /**
     * @description The H.264 profile. Valid values: BASELINE, HIGH, and MAIN. Default value: MAIN. The parameter takes effect only when the codec is H.264.
     *
     * @example MAIN
     *
     * @var string
     */
    public $profile;
    protected $_name = [
        'level'   => 'Level',
        'profile' => 'Profile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return codecDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        return $model;
    }
}
