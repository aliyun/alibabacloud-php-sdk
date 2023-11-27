<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var string[]
     */
    public $appUids;

    /**
     * @example true
     *
     * @var bool
     */
    public $mute;

    /**
     * @example 100
     *
     * @var int
     */
    public $muteDuration;
    protected $_name = [
        'appUids'      => 'AppUids',
        'mute'         => 'Mute',
        'muteDuration' => 'MuteDuration',
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
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }
        if (null !== $this->muteDuration) {
            $res['MuteDuration'] = $this->muteDuration;
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
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }
        if (isset($map['MuteDuration'])) {
            $model->muteDuration = $map['MuteDuration'];
        }

        return $model;
    }
}
