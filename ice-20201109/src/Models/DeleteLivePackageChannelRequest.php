<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteLivePackageChannelRequest extends Model
{
    /**
     * @description The channel name.
     *
     * This parameter is required.
     *
     * @example channel-1
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The channel group name.
     *
     * This parameter is required.
     *
     * @example channel-group-1
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'channelName' => 'ChannelName',
        'groupName' => 'GroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLivePackageChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
