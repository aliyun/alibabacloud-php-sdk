<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricChannelMembersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example chan-channelx-1l1hmckuu****
     *
     * @var string
     */
    public $channelId;
    protected $_name = [
        'channelId' => 'ChannelId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricChannelMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
