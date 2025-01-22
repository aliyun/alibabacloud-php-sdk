<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListChannelsRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $channelTier;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $playbackMode;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $sortByModifiedTime;
    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'channelName'        => 'ChannelName',
        'channelTier'        => 'ChannelTier',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'playbackMode'       => 'PlaybackMode',
        'sortBy'             => 'SortBy',
        'sortByModifiedTime' => 'SortByModifiedTime',
        'state'              => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
