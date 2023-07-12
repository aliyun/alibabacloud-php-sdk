<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceChannelResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceChannelResponse\data\channel\configList;
use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var configList
     */
    public $configList;
    protected $_name = [
        'channelId'   => 'ChannelId',
        'channelName' => 'ChannelName',
        'configList'  => 'ConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('channelId', $this->channelId, true);
        Model::validateRequired('channelName', $this->channelName, true);
        Model::validateRequired('configList', $this->configList, true);
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
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channel
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
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }

        return $model;
    }
}
