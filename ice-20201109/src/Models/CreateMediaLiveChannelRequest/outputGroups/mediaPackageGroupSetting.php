<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest\outputGroups;

use AlibabaCloud\Tea\Model;

class mediaPackageGroupSetting extends Model
{
    /**
     * @description ChannelName in MediaPackage.
     *
     * This parameter is required.
     *
     * @example myPackageChannel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description GroupName in MediaPackage.
     *
     * This parameter is required.
     *
     * @example myPackageGroup
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
     * @return mediaPackageGroupSetting
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
