<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\Tea\Model;

class commonConfig extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $videoResourceId;
    protected $_name = [
        'channelId'       => 'ChannelId',
        'videoResourceId' => 'VideoResourceId',
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
        if (null !== $this->videoResourceId) {
            $res['VideoResourceId'] = $this->videoResourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['VideoResourceId'])) {
            $model->videoResourceId = $map['VideoResourceId'];
        }

        return $model;
    }
}
