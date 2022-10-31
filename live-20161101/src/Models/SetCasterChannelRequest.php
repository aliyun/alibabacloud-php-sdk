<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetCasterChannelRequest extends Model
{
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
    public $faceBeauty;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $playStatus;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $seekOffset;
    protected $_name = [
        'casterId'   => 'CasterId',
        'channelId'  => 'ChannelId',
        'faceBeauty' => 'FaceBeauty',
        'ownerId'    => 'OwnerId',
        'playStatus' => 'PlayStatus',
        'resourceId' => 'ResourceId',
        'seekOffset' => 'SeekOffset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->faceBeauty) {
            $res['FaceBeauty'] = $this->faceBeauty;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playStatus) {
            $res['PlayStatus'] = $this->playStatus;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->seekOffset) {
            $res['SeekOffset'] = $this->seekOffset;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['FaceBeauty'])) {
            $model->faceBeauty = $map['FaceBeauty'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlayStatus'])) {
            $model->playStatus = $map['PlayStatus'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SeekOffset'])) {
            $model->seekOffset = $map['SeekOffset'];
        }

        return $model;
    }
}
