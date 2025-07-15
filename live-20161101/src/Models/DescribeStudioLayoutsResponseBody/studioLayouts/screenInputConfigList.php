<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\screenInputConfigList\audioConfig;
use AlibabaCloud\Tea\Model;

class screenInputConfigList extends Model
{
    /**
     * @description The audio configurations.
     *
     * @var audioConfig
     */
    public $audioConfig;

    /**
     * @description The ID of the channel that is bound to the video resource.
     *
     * @example RV01
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The color gamut for chroma key. Valid values:
     *
     *   **blue**
     *   **green**
     *   **auto**: automatic recognition
     *   **complex**: background replacement
     *
     * @example green
     *
     * @var string
     */
    public $color;

    /**
     * @description The normalized value of the height. The value indicates the ratio of the height of the keyed portrait to the height of the background. Valid values: **0 to 1**.
     *
     * @example 0.4
     *
     * @var float
     */
    public $heightNormalized;

    /**
     * @description The unique ID of the chroma key source.
     *
     * @example k12kj31****
     *
     * @var string
     */
    public $id;

    /**
     * @description The sequence number of the chroma key source. This parameter is displayed on the frontend but not used in the operation logic.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description Indicates whether only audio exists.
     *
     * @example true
     *
     * @var bool
     */
    public $onlyAudio;

    /**
     * @description The portrait type. Valid values:
     *
     *   **0**: half body
     *   **1**: full body
     *
     * @example 0
     *
     * @var int
     */
    public $portraitType;

    /**
     * @description The x-coordinate of the material. Valid values: **0 to 1**. The upper-left corner is used as the coordinate origin for the material.
     *
     * @example 0.1
     *
     * @var string
     */
    public $positionX;

    /**
     * @description The y-coordinate of the material. Valid values: **0 to 1**. The upper-left corner is used as the coordinate origin for the material.
     *
     * @example 0.2
     *
     * @var string
     */
    public $positionY;

    /**
     * @description The ID of the video resource.
     *
     * @example asdfasdfasdfasdfa****
     *
     * @var string
     */
    public $videoResourceId;
    protected $_name = [
        'audioConfig' => 'AudioConfig',
        'channelId' => 'ChannelId',
        'color' => 'Color',
        'heightNormalized' => 'HeightNormalized',
        'id' => 'Id',
        'index' => 'Index',
        'onlyAudio' => 'OnlyAudio',
        'portraitType' => 'PortraitType',
        'positionX' => 'PositionX',
        'positionY' => 'PositionY',
        'videoResourceId' => 'VideoResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioConfig) {
            $res['AudioConfig'] = null !== $this->audioConfig ? $this->audioConfig->toMap() : null;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->onlyAudio) {
            $res['OnlyAudio'] = $this->onlyAudio;
        }
        if (null !== $this->portraitType) {
            $res['PortraitType'] = $this->portraitType;
        }
        if (null !== $this->positionX) {
            $res['PositionX'] = $this->positionX;
        }
        if (null !== $this->positionY) {
            $res['PositionY'] = $this->positionY;
        }
        if (null !== $this->videoResourceId) {
            $res['VideoResourceId'] = $this->videoResourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return screenInputConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioConfig'])) {
            $model->audioConfig = audioConfig::fromMap($map['AudioConfig']);
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['OnlyAudio'])) {
            $model->onlyAudio = $map['OnlyAudio'];
        }
        if (isset($map['PortraitType'])) {
            $model->portraitType = $map['PortraitType'];
        }
        if (isset($map['PositionX'])) {
            $model->positionX = $map['PositionX'];
        }
        if (isset($map['PositionY'])) {
            $model->positionY = $map['PositionY'];
        }
        if (isset($map['VideoResourceId'])) {
            $model->videoResourceId = $map['VideoResourceId'];
        }

        return $model;
    }
}
