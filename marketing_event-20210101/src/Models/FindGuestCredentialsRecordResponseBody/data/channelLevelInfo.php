<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody\data;

use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody\data\channelLevelInfo\levelOneOwner;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody\data\channelLevelInfo\levelThreeOwner;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody\data\channelLevelInfo\levelTwoOwner;
use AlibabaCloud\Tea\Model;

class channelLevelInfo extends Model
{
    /**
     * @example 1401
     *
     * @var int
     */
    public $channelId;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $levelOneChannelName;

    /**
     * @var levelOneOwner[]
     */
    public $levelOneOwner;

    /**
     * @var string
     */
    public $levelThreeChannelName;

    /**
     * @var levelThreeOwner[]
     */
    public $levelThreeOwner;

    /**
     * @var string
     */
    public $levelTwoChannelName;

    /**
     * @var levelTwoOwner[]
     */
    public $levelTwoOwner;
    protected $_name = [
        'channelId'             => 'ChannelId',
        'channelName'           => 'ChannelName',
        'levelOneChannelName'   => 'LevelOneChannelName',
        'levelOneOwner'         => 'LevelOneOwner',
        'levelThreeChannelName' => 'LevelThreeChannelName',
        'levelThreeOwner'       => 'LevelThreeOwner',
        'levelTwoChannelName'   => 'LevelTwoChannelName',
        'levelTwoOwner'         => 'LevelTwoOwner',
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
        if (null !== $this->levelOneChannelName) {
            $res['LevelOneChannelName'] = $this->levelOneChannelName;
        }
        if (null !== $this->levelOneOwner) {
            $res['LevelOneOwner'] = [];
            if (null !== $this->levelOneOwner && \is_array($this->levelOneOwner)) {
                $n = 0;
                foreach ($this->levelOneOwner as $item) {
                    $res['LevelOneOwner'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->levelThreeChannelName) {
            $res['LevelThreeChannelName'] = $this->levelThreeChannelName;
        }
        if (null !== $this->levelThreeOwner) {
            $res['LevelThreeOwner'] = [];
            if (null !== $this->levelThreeOwner && \is_array($this->levelThreeOwner)) {
                $n = 0;
                foreach ($this->levelThreeOwner as $item) {
                    $res['LevelThreeOwner'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->levelTwoChannelName) {
            $res['LevelTwoChannelName'] = $this->levelTwoChannelName;
        }
        if (null !== $this->levelTwoOwner) {
            $res['LevelTwoOwner'] = [];
            if (null !== $this->levelTwoOwner && \is_array($this->levelTwoOwner)) {
                $n = 0;
                foreach ($this->levelTwoOwner as $item) {
                    $res['LevelTwoOwner'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelLevelInfo
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
        if (isset($map['LevelOneChannelName'])) {
            $model->levelOneChannelName = $map['LevelOneChannelName'];
        }
        if (isset($map['LevelOneOwner'])) {
            if (!empty($map['LevelOneOwner'])) {
                $model->levelOneOwner = [];
                $n                    = 0;
                foreach ($map['LevelOneOwner'] as $item) {
                    $model->levelOneOwner[$n++] = null !== $item ? levelOneOwner::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LevelThreeChannelName'])) {
            $model->levelThreeChannelName = $map['LevelThreeChannelName'];
        }
        if (isset($map['LevelThreeOwner'])) {
            if (!empty($map['LevelThreeOwner'])) {
                $model->levelThreeOwner = [];
                $n                      = 0;
                foreach ($map['LevelThreeOwner'] as $item) {
                    $model->levelThreeOwner[$n++] = null !== $item ? levelThreeOwner::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LevelTwoChannelName'])) {
            $model->levelTwoChannelName = $map['LevelTwoChannelName'];
        }
        if (isset($map['LevelTwoOwner'])) {
            if (!empty($map['LevelTwoOwner'])) {
                $model->levelTwoOwner = [];
                $n                    = 0;
                foreach ($map['LevelTwoOwner'] as $item) {
                    $model->levelTwoOwner[$n++] = null !== $item ? levelTwoOwner::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
