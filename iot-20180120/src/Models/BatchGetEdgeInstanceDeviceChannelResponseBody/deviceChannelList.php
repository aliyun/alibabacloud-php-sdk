<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceChannelResponseBody;

use AlibabaCloud\Tea\Model;

class deviceChannelList extends Model
{
    /**
     * @example BE0BD49EF5EF4D119D09CC1B25******
     *
     * @var string
     */
    public $channelId;

    /**
     * @example le_name_update
     *
     * @var string
     */
    public $channelName;

    /**
     * @example Hathoyxglj9jpYPyw3WN0******
     *
     * @var string
     */
    public $iotId;
    protected $_name = [
        'channelId'   => 'ChannelId',
        'channelName' => 'ChannelName',
        'iotId'       => 'IotId',
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
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceChannelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
