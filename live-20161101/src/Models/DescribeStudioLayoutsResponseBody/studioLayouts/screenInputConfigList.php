<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts\screenInputConfigList\audioConfig;
use AlibabaCloud\Tea\Model;

class screenInputConfigList extends Model
{
    /**
     * @var audioConfig
     */
    public $audioConfig;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $color;

    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $index;

    /**
     * @var bool
     */
    public $onlyAudio;

    /**
     * @var int
     */
    public $portraitType;

    /**
     * @var string
     */
    public $positionX;

    /**
     * @var string
     */
    public $positionY;

    /**
     * @var string
     */
    public $videoResourceId;
    protected $_name = [
        'audioConfig'      => 'AudioConfig',
        'channelId'        => 'ChannelId',
        'color'            => 'Color',
        'heightNormalized' => 'HeightNormalized',
        'id'               => 'Id',
        'index'            => 'Index',
        'onlyAudio'        => 'OnlyAudio',
        'portraitType'     => 'PortraitType',
        'positionX'        => 'PositionX',
        'positionY'        => 'PositionY',
        'videoResourceId'  => 'VideoResourceId',
    ];

    public function validate()
    {
    }

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
