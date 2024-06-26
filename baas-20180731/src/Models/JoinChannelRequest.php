<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class JoinChannelRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example chan-channelx-1l1hmckuu****
     *
     * @var string
     */
    public $channelId;

    /**
     * @description This parameter is required.
     *
     * @example accept
     *
     * @var string
     */
    public $do;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'channelId' => 'ChannelId',
        'do'        => 'Do',
        'location'  => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->do) {
            $res['Do'] = $this->do;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Do'])) {
            $model->do = $map['Do'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
