<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListChannelsRequest extends Model
{
    /**
     * @description The name of the channel.
     *
     * @example MyChannel
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The tier of the channel. Valid values: basic and standard.
     *
     * @example basic
     *
     * @var string
     */
    public $channelTier;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The playback mode. Valid values: loop and linear.
     *
     * @example loop
     *
     * @var string
     */
    public $playbackMode;

    /**
     * @description The sorting order by creation time. Valid values: asc and desc.
     *
     * @example asc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The sorting order by modification time. Valid values: asc and desc.
     *
     * @example desc
     *
     * @var string
     */
    public $sortByModifiedTime;

    /**
     * @description The channel status. A value of 0 specifies stopped. A value of 1 specifies started.
     *
     * @example 0
     *
     * @var int
     */
    public $state;
    protected $_name = [
        'channelName' => 'ChannelName',
        'channelTier' => 'ChannelTier',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'playbackMode' => 'PlaybackMode',
        'sortBy' => 'SortBy',
        'sortByModifiedTime' => 'SortByModifiedTime',
        'state' => 'State',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->channelTier) {
            $res['ChannelTier'] = $this->channelTier;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playbackMode) {
            $res['PlaybackMode'] = $this->playbackMode;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortByModifiedTime) {
            $res['SortByModifiedTime'] = $this->sortByModifiedTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChannelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ChannelTier'])) {
            $model->channelTier = $map['ChannelTier'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlaybackMode'])) {
            $model->playbackMode = $map['PlaybackMode'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortByModifiedTime'])) {
            $model->sortByModifiedTime = $map['SortByModifiedTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
