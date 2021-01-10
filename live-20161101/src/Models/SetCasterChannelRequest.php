<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetCasterChannelRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $seekOffset;

    /**
     * @var int
     */
    public $playStatus;

    /**
     * @var int
     */
    public $reloadFlag;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'casterId'   => 'CasterId',
        'channelId'  => 'ChannelId',
        'resourceId' => 'ResourceId',
        'seekOffset' => 'SeekOffset',
        'playStatus' => 'PlayStatus',
        'reloadFlag' => 'ReloadFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->seekOffset) {
            $res['SeekOffset'] = $this->seekOffset;
        }
        if (null !== $this->playStatus) {
            $res['PlayStatus'] = $this->playStatus;
        }
        if (null !== $this->reloadFlag) {
            $res['ReloadFlag'] = $this->reloadFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCasterChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SeekOffset'])) {
            $model->seekOffset = $map['SeekOffset'];
        }
        if (isset($map['PlayStatus'])) {
            $model->playStatus = $map['PlayStatus'];
        }
        if (isset($map['ReloadFlag'])) {
            $model->reloadFlag = $map['ReloadFlag'];
        }

        return $model;
    }
}
