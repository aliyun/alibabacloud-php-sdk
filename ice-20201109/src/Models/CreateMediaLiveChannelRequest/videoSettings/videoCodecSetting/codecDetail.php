<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest\videoSettings\videoCodecSetting;

use AlibabaCloud\Dara\Model;

class codecDetail extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $profile;
    protected $_name = [
        'level' => 'Level',
        'profile' => 'Profile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
