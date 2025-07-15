<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetCasterChannelRequest extends Model
{
    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The ID of the channel.
     *
     * When channels are enabled, the layout references the channel IDs. You can specify up to one resource for a channel. The number of resources is limited by the number of the channels of the production studio. The value must be in the RV[Number] format, such as RV01 and RV12.
     *
     * This parameter is required.
     *
     * @example RV01
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The face retouching effect. Valid values: 0 (all effects), 1 (skin smoothing), 2 (skin whitening), 3 (dark circles removal), and 4 (nasolabial folds removal).
     *
     * @example 0
     *
     * @var string
     */
    public $faceBeauty;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The playback status. This parameter take effects for video files, but not for live streams. Valid values:
     *
     *   **1**: specifies that the video source is playing. This is the default value.
     *   **0**: specifies that the playback of the video source is paused.
     *
     * @example 1
     *
     * @var int
     */
    public $playStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the video source.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The offset of the position where the production studio starts reading the video source. The value must be greater than or equal to 0, indicating an offset from the first frame. This parameter take effects for video files, but not for live streams. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $seekOffset;
    protected $_name = [
        'casterId' => 'CasterId',
        'channelId' => 'ChannelId',
        'faceBeauty' => 'FaceBeauty',
        'ownerId' => 'OwnerId',
        'playStatus' => 'PlayStatus',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'seekOffset' => 'SeekOffset',
    ];

    public function validate() {}

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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
